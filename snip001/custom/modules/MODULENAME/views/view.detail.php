<?php

require_once('include/MVC/View/views/view.detail.php');

class module_nameViewDetail extends ViewDetail {

    function module_nameViewDetail() {
        parent::ViewDetail();
    }

    function display() {

        $relationship_link = 'relationship_linkname_fromstudio';

        if( $this->bean->load_relationship( $relationship_link ) ) {

            $organisationBeans = $this->bean->$relationship_link->getBeans();
            $organisationBean = reset($organisationBeans);
        
        //print_r($organisationBean); 
        
            $this->ss->assign( 'CUSTOM_FIELD1', $organisationBean->any_field );
            $this->ss->assign( 'CUSTOM_FIELD2', $organisationBean->relationship_1_name );
            $this->ss->assign( 'CUSTOM_FIELD3', $organisationBean->relationship_2_name );
            $this->ss->assign( 'CUSTOM_FIELD4', $organisationBean->relationship_3_name );

        

        }

        parent::display($CUSTOM_FIELD1,$CUSTOM_FIELD2,$CUSTOM_FIELD3,$CUSTOM_FIELD4);
    }

}
