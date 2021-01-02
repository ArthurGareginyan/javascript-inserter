/*
 * CodeMirror editor settings
 *
 * @package     JavaScript Inserter
 * @author      Arthur Gareginyan
 * @link        https://www.spacexchimp.com
 * @copyright   Copyright (c) 2018-2021 Space X-Chimp. All Rights Reserved.
 */


jQuery(document).ready(function($) {

    "use strict";

    // Find textareas on page and replace them with the CodeMirror editor
    $('textarea').each(function(index, element){
        var editor = CodeMirror.fromTextArea(element, {
            lineNumbers: true,
            firstLineNumber: 1,
            matchBrackets: true,
            indentUnit: 4,
            mode: 'text/javascript',
            autoRefresh: true,
            styleActiveLine: true
        }).on('change', function() {
            $( element ).closest('.postbox').children('h3').children('.pull-right').children('.not-saved').show();
        });
    });

});
