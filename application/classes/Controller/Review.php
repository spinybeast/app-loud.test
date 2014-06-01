<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Review extends Controller_Common
{
    private $filter;

    public function before()
    {
        parent::before();

        $this->filter = $this->getFilter();
    }

    public function action_index()
    {
        if ($reviewsList = $this->getReviews()) {
            $reviewsCount = $reviewsList->reset(false)->count_all();

            if ($reviewsCount > Model_Review::REVIEWS_PER_PAGE && $this->filter != Model_Review::TOP) {
                $pagination = Pagination::factory(array('total_items' => $reviewsCount));
                $reviewsList = $reviewsList->limit($pagination->items_per_page)->offset($pagination->offset);
            }

            $headerVariables = array('filter' => $this->filter);
            $rightBlockVariables = array('category_cloud' => ORM::factory("Category")->getCloudForPlatform($this->platform));
            $centerVariables = array('reviews' => $reviewsList->find_all(), 'pagination' => isset($pagination) ? $pagination : false);
            $this->page("review_list", $headerVariables, $rightBlockVariables, $centerVariables);
        }
    }

    public function action_read()
    {
        $reviewId = Request::current()->param('id', 0);
        /** @var Model_Review $review */
        $review = ORM::factory("Review", $reviewId);

        if (!$review->loaded()) {
            return $this->notFoundPage();
        }

        return $this->reviewPage($review);
    }

    public function action_preview()
    {
        $reviewData = $this->request->post();
        $review = new Model_Review();
        $review->fill($reviewData);

        $this->reviewPage($review);
    }

    private function getReviewsByPlatform()
    {
        return ORM::factory("Review")->forPlatform($this->platform)->filterBy($this->filter);
    }

    private function getReviewsByCategory()
    {
        return ORM::factory("Category", $this->category)->getReviews()->filterBy($this->filter);
    }

    private function getFilter()
    {
        return trim(Request::current()->param('filter'));
    }

    private function getReviews()
    {
        if ($this->category > 0) {
            return $this->getReviewsByCategory();
        } elseif ($this->platform > 0) {
            return $this->getReviewsByPlatform();
        } else {
            return false;
        }
    }

    public function action_add()
    {
        $this->setShowRightBlock(false);
        $this->addJS('media/js/jquery.jcarousel.js');
        $this->addJS('media/js/reviewpage.js');
        $this->addJS('media/js/jquery.uploadfile.js');
        $this->addCSS('media/css/jcarousel.css');
        $this->page('add_review');
    }

}