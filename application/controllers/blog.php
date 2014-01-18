<?php /**
 *  Ctrl+Shift+F
 */
 //wwwwwwwwwwwwwwwwwwwwwww
class Blog extends CI_Controller {
    function index() {

        $this -> load -> helper('url');
        $this -> load -> helper('form');

        $data['name'] = $this -> input -> post('title');
        //  $data['age'] = 99;

        $this -> load -> view('site', $data);
    }

    function add_Blog() {
        $this -> load -> helper('form');
        $this -> load -> library('form_validation');
        $data['title'] = $this -> input -> post('title');
        $data['content'] = $this -> input -> post('content');

        $this -> form_validation -> set_rules('title', 'Title', 'required|max_length[50]');
        $this -> form_validation -> set_rules('content', 'Content', 'required|min_length[5]');
        /*    if($data['content']=='walaa')
         {
         $this->form_validation->set_message('content','good like');
         }
         */
        if ($this -> form_validation -> run() == FALSE) {
            $this -> load -> view('blog', $data);
        } else {
            $this -> load -> view('success');

        }

    }
    public function show()
    {
        $this->load->Model('site_model');
        $this->site_model->get();
        var_dump();
    }

    function about() {
        echo "about";
    }

}
