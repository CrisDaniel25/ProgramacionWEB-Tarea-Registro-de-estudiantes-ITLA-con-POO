<?php
    class StudentServiceCookies implements IService {
        
        private $student;
        private $cookieName;

        public function __construct() {

            $this->student = new Student();
            $this->cookieName = "Student";
        }

        public function GetList() {

            $student = new Student();
            $ListStudent = array();

            if (isset($_COOKIE[$this->cookieName])) {
                $ListStudent = json_decode($_COOKIE[$this->cookieName],false);
            }
            else {
                setcookie($this->cookieName, json_encode($ListStudent), $student->GetCookieTime(), "/");
            }

            return $ListStudent;
        }

        public function GetById($id) {

            $ListStudent = $this->GetList();
            $elementDecode = $this->student->searchProperty($ListStudent,'id',$id)[0];
            $student->set($elementDecode);
            return $student;
        }

        public function Add($entity) {

            $ListStudent = $this->GetList();
            $studentID = 1;
            
            if (!empty($ListStudent)) {
                $LastStudent = $this->getLastElement($ListStudent);
                $studentID = $LastStudent->id + 1;
            }
            
            $entity->id = $studentID;

            array_push($ListStudent,$entity);

            echo '<p>dasdsa</p>';
            // setcookie($this->cookieName, json_encode($ListStudent), $student->GetCookieTime(), "/");
        }

        public function Update($id, $entity) {

            $element = $this->GetById($id);
            $ListStudent = $this->GetList();
            
            $elementIndex = $this->student->getIndexElement($ListStudent,'id',$id);

            $ListStudent[$elementIndex] = $entity;

            setcookie($this->cookieName, json_encode($ListStudent), $student->GetCookieTime(), "/");
        }

        public function Delete($id) {

            $ListStudent = $this->GetList();

            $elementIndex = $this->student->getIndexElement($ListStudent,'id',$id);

            unset($ListStudent[$elementIndex]);

            $ListStudent = array_values($ListStudent);

            setcookie($this->cookieName, json_encode($ListStudent), $student->GetCookieTime(), "/");
        }
    }
?>