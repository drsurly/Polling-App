<?php

class Polls extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $poll_id;

    /**
     *
     * @var string
     */
    public $poll_question;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'polls';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Polls[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Polls
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
