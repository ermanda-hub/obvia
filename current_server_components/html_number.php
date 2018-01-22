<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'html_element.php';

/**
 * Class html_text
 *
 * Ben extends html_element.php.
 * <br/>
 * Realizon shfaqjen e nje elementi text sipas funksioneve qe permban kjo klase.
 *
 */
class html_number extends html_element {

    public $minInput;
    public $maxInput;

    /**
     * Funksioni render()
     *
     * Kthen html e ndertimit te elementit.
     * @return html code
     */
    public function render() {
        if(isNullOrEmpty($this->col_span) || $this->col_span == 0)
            $this->col_span = 2;

        $additionalHtml = "";
        if($this->minInput != "")
            $additionalHtml .= " min=\"{$this->minInput}\" ";
        if($this->maxInput != "")
            $additionalHtml .= " max=\"{$this->maxInput}\" ";

        return
            "<div   id='all_div_number_{$this->field_name}' class='form-group col-lg-{$this->col_span} resizable'>
                <label for='{$this->field_name}'>{$this->label} {$this->required}</label>
				<span class='block-process'> {$this->block_process_attribute} </span>
                <input type='{$this->type_name}' {$additionalHtml} onkeypress='return event.keyCode == 8 || (event.charCode >= 48 && event.charCode <= 57) '
   
                    id='{$this->field_name}' name='{$this->field_name}' value='{$this->field_value}'
                    class='form-control rowspan{$this->row_span}'
                    placeholder=\"{$this->label}\" autofocus/>" .
            $this->html_tooltip() .
            "</div>";
    }
    /**
     * Funksioni script_additional
     *
     * Nese ka scripte qe jane jashte funksioni document.ready() shenohen ketu.
     *  kjo per arsye qe document ready ne fund te gjenerimit te elementeve te perdoret vetem nje here.
     *
     * @return string Kodi ne javascript
     */
    public function script_additional() {
        return "";
    }

    public function formVariables() {
        return "
            window.form_variables.{$this->field_name} = {
                                                                selector: $('#{$this->field_name}'),
                                                                value: $('#{$this->field_name}').val(), 
                                                                block: $('#{$this->field_name}-block'),
                                                                source: '$(\'#{$this->field_name}\').val()'
                                                            };
        ";
    }

    /**
     * Funksioni script_load()
     *
     * Merr te gjitha scriptet qe duhet te vendosen ne document ready qe te jene gati ne loadimin e formes.
     * @return string
     */
    public function script_load() {
        return $this->formVariables();
    }
    /**
     * Funksioni validation_messazhe()
     *
     * Ky funsksion merr te gjith mesazhet e validimit qe do te kthen nga validimi i elementeve.
     * @return string mesazhet e validimit ne nje array.
     */

    public function validation_messages() {
        if($this->required != "")
        {
            return
                "$this->field_name: { 
                required: 'Plotësoni fushën \"$this->label\"'
            }";
        }
        else
            return "";
    }
    /**
     * Funksioni validation_rules()
     *
     * Ky funsksion merr te gjith rregullat e validimit qe do te vendosen per validimi i elementeve.
     * @return array rregullat e validimit ne nje array.
     */
    public function validation_rules() {
        if($this->required != "")
        {
            return
                "$this->field_name: { 
                required: true
            }";
        }
        else
            return "";
    }
    /**
     * Funksioni include_scripts()
     *
     * Kthen te gjitha filet .js qe duhet te perfshijme si referenca ne loadin e ketij elementi.
     * <br/>Filet jane te renditur sipas rradhes.
     * @return array filet .js
     */
    public function include_scripts() {
        return array();
    }
    /**
     * Funksioni Include_styles()
     *
     * Kthen te gjitha filet .css qe duhet te perfshijme si referenca ne loadin e ketij elementi.
     * @return array filet .css
     */
    public function include_styles() {
        return array();
    }

}
