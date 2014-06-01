<?php defined('SYSPATH') or die('No direct script access.');

class ORM extends Kohana_ORM
{
    protected $_primary_key = 'id';
    protected $_created_column = array('column' => '_last_time', 'format' => true);
    protected $_updated_column = array('column' => '_last_time', 'format' => true);

    public $mod_comment = '';
    public $manual_last_user = -100;
    public $manual_last_time = -100;

    /*
        public function add($alias, $far_keys)
        {
            $far_keys = ($far_keys instanceof ORM) ? $far_keys->pk() : $far_keys;

            $columns = array($this->_has_many[$alias]['foreign_key'], $this->_has_many[$alias]['far_key']);
            $foreign_key = $this->pk();
            foreach ( (array) $far_keys as $key)
            {
                $query = DB::insert($this->_has_many[$alias]['through'], $columns);
                $query->values(array($foreign_key, $key));
                $query->execute($this->_db);
            }
            return $this;
        }
    */
    public function create(Validation $validation = NULL)
    {
        //
        //dbg::prn($this); return;
        if ($this->manual_last_user != -100) {
            if (isset($this->_table_columns['_last_user'])) $this->_last_user = $this->manual_last_user;
        } else {
            if (isset($this->_table_columns['_last_user'])) $this->_last_user = Auth::instance()->get_user();
        }
        //
        if ($this->manual_last_time != -100) {
            $this->_created_column = null;
            $this->_last_time = $this->manual_last_time;
        } else {
        } // auto create
        /* mssql only
        $cc = $this->list_columns();
        foreach ( $cc as $n=>$c){
            if( $c['data_type'] == 'int' && $n != $this->primary_key() ){
                $this->_object[$n] =  intval($this->$n);
            }elseif( $c['data_type'] == 'float' && $n != $this->primary_key() ){
                $this->_object[$n] =  floatval($this->$n);
            }
        }
        /**/

        return parent::create($validation);
    }

    // create

    public function update(Validation $validation = NULL)
    {

        // check that obj has history and changed
        if (isset($this->history) && $this->changed()) {

            $old = $this->original_values();
            $h = $this->history;

            //if changed field histored
            $really = array_intersect_key($h->_object, $this->changed());

            if (!empty($really)) {
                $entry_fields = array_keys($old); // entry fields
                // history it only if [history] has this field
                foreach ($entry_fields as $f) {
                    if (array_key_exists($f, $h->_object)) {
                        $h->$f = $old[$f];
                    }
                }
                $auto_comment = 'changed: ' . implode(', ', array_keys($really));
                $v = $this->history->select('version')->where('relative_id', '=', $this->id)->count_all();
                $h->id = null;
                $h->relative_id = $this->id;
                $h->version = $v + 1;
                $h->comment = trim(@$this->mod_comment) . '<br>' . PHP_EOL . $auto_comment;

                $h->create();


            }
        }
        //
        if ($this->manual_last_user != -100) {
            if (isset($this->_table_columns['_last_user'])) $this->_last_user = $this->manual_last_user;
        } else {
            if (isset($this->_table_columns['_last_user'])) $this->_last_user = Auth::instance()->get_user();
        }
        //
        if ($this->manual_last_time != -100) {
            $this->_updated_column = null;
            $this->_last_time = $this->manual_last_time;
        } else {
        }
        // auto update

        /*
        // need for mssql due to not null insert\update
        $cc = $this->list_columns();
        foreach ( $cc as $n=>$c){
            if( $c['data_type'] == 'int' && $n != $this->primary_key() ){
                $this->_object[$n] =  intval($this->$n);
            }elseif( $c['data_type'] == 'float' && $n != $this->primary_key() ){
                $this->_object[$n] =  floatval($this->$n);
            }
        }
        /**/
        return parent::update($validation);
    }
    //update

}
