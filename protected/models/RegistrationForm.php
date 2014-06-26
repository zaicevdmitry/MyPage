<?php
/**
 * Created by PhpStorm.
 * User: dmitry.zaicev
 * Date: 26.06.14
 * Time: 10:06
 */

class RegistrationForm extends CFormModel
{
    public $first_name;
    public $last_name;
    public $email;
    public $pass;
    public $active;
    private $_identity;

    /** * Declares the validation rules.

     * The rules state that first name, last name, email and pass are required,
     * email must be valid email.
     * email must be unique using User class.
     */
    public function rules() {
        return array(
            // username and password are required
            array('first_name, last_name, email, pass', 'required'),
            // trim date for first names, further validation? strip_tags?
            array('first_name, last_name, email, pass', 'filter', 'filter' => 'trim'),
            // email must be valid email
            array('email', 'email'),
            // email must be unique and use User class
            array('email', 'unique', 'className' => 'User'),
            // default for date created
        ); }

    /** * Declares attribute labels. */
    public function attributeLabels() {
        return array(
            'first name'=>'First Name',
            'last_name'=>'Last Name',
            'email'=>'Email',
            'password'=>'Password',
        );
    }
}
