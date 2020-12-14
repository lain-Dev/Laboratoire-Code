<?php

    class Validation
    {

        public $errors = array();

        public function validate($data, $rules)
        {
            $valid = true;

            foreach ($rules as $fieldname => $rule) {
                $callbacks = explode('|', $rule);

                foreach ($callbacks as $callback) {
                    $value = isset($data[$fieldname]) ? $data[$fieldname] : null;
                    if ($this->$callback($value, $fieldname) == false) $valid = false;
                }
            }

            return $valid;
        }

        public function email($value, $fieldname)
        {
            $valid = filter_var($value, FILTER_VALIDATE_EMAIL);
            if ($valid == false) $this->errors[] = "$fieldname doit &ecirc;tre un email valide";
            return $value;
        }

        public function required($value, $fieldname)
        {
            $valid = !empty($value);
            if ($valid == false) $this->errors[] = "$fieldname est obligatoire";
            return $value;
        }
    }