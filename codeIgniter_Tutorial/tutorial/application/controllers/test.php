<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    function __construct()
    { // 생성자다, 초기화와 관련된 함수다.
        parent::__construct();
        /* 내가 설정한 데이터베이스 라이브러리 설정 */
        //$this->load->database();
        /* 접근할 모델 설정 */
        //$this->load->model('board_model');
    }

    /* URL의 메소드명을 적는 곳에 메소드명이 없을 시 자동으로 이 index() 메소드가 호출된다. */
    public function index()
    {
    }
}
