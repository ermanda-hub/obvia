<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'html_element.php';

/**
 * Class html_label
 * 
 * Ben extends html_element.php.
 * <br/>
 * Realizon shfaqjen e nje elementi label sipas funksioneve qe permban kjo klase.
 *
 * @author Lulzime Brati
 */
class html_newline extends html_element {
    /**
     * Funksioni render()
     * 
     * Kthen html e ndertimit te elementit.
     * @return html code
     */
    public function render() {
        return 
            "<div class='col-lg-12 rowspan{$this->row_span} resizable' style='background-color: #ccc; margin-bottom: 5px;'><label></label></div>";
			// <label for='{$this->field_name}'>{$this->label}</label>
    }
    public function render_for_view() {
        return 
            "<div class='col-lg-12 rowspan{$this->row_span}'></div>";
			// <label for='{$this->field_name}'>{$this->label}</label>
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

    public function formVariables(){
        return "";
    }

    /**
     * Funksioni script_load()
     * 
     * Merr te gjitha scriptet qe duhet te vendosen ne document ready qe te jene gati ne loadimin e formes.
     * @return string
     */
    public function script_load() {
        return "";
    }
    /**
     * Funksioni validation_messazhe()
     * 
     * Ky funsksion merr te gjith mesazhet e validimit qe do te kthen nga validimi i elementeve.
     * @return string mesazhet e validimit ne nje array.
     */

    public function validation_messages() {
        return
            "";
    }
    /**
     * Funksioni validation_rules()
     * 
     * Ky funsksion merr te gjith rregullat e validimit qe do te vendosen per validimi i elementeve.
     * @return array rregullat e validimit ne nje array.
     */
    public function validation_rules() {
        return
            "";
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
