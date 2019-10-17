<?php
    namespace Leaf\Core;
    
    class Validation extends Response {

        public function isEmpty($field, $errorMessage = "Field is required") {
            if (empty($field)) {
                $res = array("message" => $errorMessage, "type" => "error", "clearForm" => false);
                echo $this->response->throwErr($res, API_PARAM_REQUIRED);
            } else {
                return;
            }
        }

        public function isEmptyOrNull($field, $errorMessage = "Field is required") {
            if (empty($field) || $field == null) {
                $res = array("message" => $errorMessage, "type" => "error", "clearForm" => false);
                echo $this->response->throwErr($res, API_PARAM_REQUIRED);
            } else {
                return;
            }
        }

        public function returnEmptyOrNull($field, $errorMessage = "Field is required") {
            if (empty($field) || $field == null) {
                $res = array("message" => $errorMessage, "type" => "error", "clearForm" => false);
                return $this->response->throwErr($res, API_PARAM_REQUIRED);
            } else {
                return;
            }
        }
    }