<?php

namespace myframe;
    class Validator
    {
        public $errors = [];
        protected $rules_list = ['required', 'min', 'max',];

        protected $messages = [
            'required' => 'The :fieldname: field is required',
            'min' => 'The :fieldname: must be a minimum :rulevalue: characters',
            'max' => 'The :fieldname: must be a maximum :rulevalue: characters',
            'email' => 'Not valid email'
        ];
        public function validate($data = [], $rules = [])
        {
            foreach ($data as $fieldname => $value)
            {

                if (array_key_exists($fieldname, $rules))
                {
                    $field = [
                        'fieldname' => $fieldname,
                        'value' => $value,
                        'rules' => $rules[$fieldname],
                    ];
                    $this->check($field);
                }
            }

                       return $this;
        }

        protected function check($field)
        {
            foreach ($field['rules'] as $rule => $rule_value)
            {
                if (in_array($rule, $this->rules_list))
                {
                   if (!call_user_func_array([$this, $rule], [$field['value'], $rule_value]))
                   {
                       $msg = str_replace([':fieldname:', ':rulevalue:'],
                           [$field['fieldname'], $rule_value],
                           $this->messages[$rule]);
                       $this->addError($field['fieldname'], $msg) ;

                   }

                }
            }
        }

        protected function addError($fieldname, $error)
        {
            return $this->errors[$fieldname][] = $error;
        }

        public function getErrors()
        {
          return $this->errors;
        }

        public function hasErrors()
        {
            return !empty($this->errors);
        }

        public function ListErrors($fieldname)
        {
            $output = '';
            if (isset($this->errors[$fieldname]))
            {
                $output .= "<div class='invalid-feedback d-block'><ul class='list-unstyled'>";
                    foreach ($this->errors[$fieldname] as $error)
                    {
                        $output .= "<li>{$error}</li>";
                    }
                $output .= "</ul></div>";
            }
            return $output;
        }

        protected function required($value, $rule_value)
        {
            return !empty(trim($value));
        }

        protected function min($value, $rule_value)
        {
           return mb_strlen($value, 'UTF-8') >= $rule_value;
        }

        protected function max($value, $rule_value)
        {
            return mb_strlen($value, 'UTF-8') <= $rule_value;
        }



    }