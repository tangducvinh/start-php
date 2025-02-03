<?php 
    echo "This is page talk about oop in php." . "<br>";

    class User {
        public $name;
        public $email;
        public $age;
        public $password;

        // constructor
        public function __construct($name, $email, $age, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            $this->password = $password;
        }

        // method
        function set_name($name) {
            $this->name = $name;
        }

        function set_email($email) {
            $this->email = $email;
        }

        function get_name() {
            return $this->name;
        }

    }

    class Employee extends User {
        public $title;
        public function __construct($name, $email, $age, $password, $title) {
            parent::__construct($name, $email, $age, $password);
            $this->title = $title;
        }

        public function get_title() {
            return $this->title;
        }
    }

    $user1 = new User("berlin", "berlin@gmail.com", 22, "123456");
    $employee1 = new Employee("vinh", "vinh@gmail.com", 22, "123456", "Manager");



    print_r($employee1);
    // $user2 = new User();
    // $user3 = new User();
    // $user1->name = "Berlin";
    // $user1->age = "22";
    // $user1->password = '123456';
    // $user1->email = "ducvinh100503@gmail.com";
    // $user1->set_name("Berlin so 8");
    // $user2->set_name("admin");

    // echo $user1->get_name();
    // print_r($user1->get_name());
    // print_r($user2);
    // $user1->set_name("berlin ne");
    // print_r($user1);
?>