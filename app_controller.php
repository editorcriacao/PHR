<?php

Class AppController extends Controller {

    var $components = array('Session', 'Email', 'RequestHandler');
    var $helpers = array('Html', 'Session', 'Javascript', 'Form');

}