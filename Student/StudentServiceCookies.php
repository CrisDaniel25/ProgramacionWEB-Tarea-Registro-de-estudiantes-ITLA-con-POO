<?php
    class StudentServiceCookies implements IService {
        
        private $student;
        private $cookieName = "Student";

        public function __construct() { }

        public function GetList() {

            $student = new Student();
            $ListStudent = array();

            if (isset($_COOKIE[$this->cookieName])) {
                $ListStudentDecode = json_decode($_COOKIE[$this->cookieName],true);

                foreach ($ListStudentDecode as $elementDecode) {
                    $element = new Student();
                    $element->set($elementDecode);

                    array_push($ListStudent, $element);
                }
            }
            else {
                setcookie($this->cookieName, json_encode($ListStudent), $student->GetCookieTime(), "/");
            }

            return $ListStudent;
        }

        public function GetById($id) {

            $student = new Student();

            $ListStudent = $this->GetList();
            // $elementDecode = $this->student->getIndexElement($ListStudent,'id',$id);
            // $student->set($elementDecode);
            return $student;
        }

        public function Add($entity) {

            $student = new Student();
            $ListStudent = $this->GetList();
            $studentID = 1;
            
            if (!empty($ListStudent)) {
                $LastStudent = count($ListStudent);
                $studentID = $LastStudent + 1;
            }
            
            $entity->id = $studentID;

            array_push($ListStudent,$entity);

            setcookie($this->cookieName, json_encode($ListStudent), $student->GetCookieTime(), "/");
        }

        public function Update($id, $entity) {

            $student = new Student();
            $element = $this->GetById($id);
            $ListStudent = $this->GetList();
            
            $elementIndex = $this->student->getIndexElement($ListStudent,'id',$id);

            $ListStudent[$elementIndex] = $entity;

            setcookie($this->cookieName, json_encode($ListStudent), $student->GetCookieTime(), "/");
        }

        public function Delete($id) {

            $student = new Student();

            $ListStudent = $this->GetList();

            // $elementIndex = $this->student->getIndexElement($ListStudent,'id',$id);

            unset($ListStudent[$id]);

            $ListStudent = array_values($ListStudent);

            setcookie($this->cookieName, json_encode($ListStudent), $student->GetCookieTime(), "/");
        }
    }
?>