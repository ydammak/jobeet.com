<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_5ebc78db08bd5b1806a389f5f2ec5df6b524607aa7da22fc1742c5213d74ab68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo $this->getContext($context, "id");
        echo " .sonata-ba-list-field');

        // the user does click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_";
        // line 52
        echo $this->getContext($context, "id");
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo $this->getContext($context, "id");
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo $this->getContext($context, "id");
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo $this->getContext($context, "id");
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo $this->getContext($context, "id");
        echo ".dialog('close');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo $this->getContext($context, "id");
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo $this->getContext($context, "id");
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo $this->getContext($context, "id");
        echo ").on('click', field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo $this->getContext($context, "id");
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_";
        // line 92
        echo $this->getContext($context, "id");
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo $this->getContext($context, "id");
        echo "();
                }
            });
        });
    }

    // handle the add link
    var field_dialog_form_list_";
        // line 100
        echo $this->getContext($context, "id");
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 111
        echo $this->getContext($context, "id");
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 122
        echo $this->getContext($context, "id");
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 124
        echo $this->getContext($context, "id");
        echo ");

                field_dialog_form_list_handle_action_";
        // line 126
        echo $this->getContext($context, "id");
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 129
        echo $this->getContext($context, "id");
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 134
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label"), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 136
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] close callback, removing js event');

                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 139
        echo $this->getContext($context, "id");
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 140
        echo $this->getContext($context, "id");
        echo ").off('submit');
                    },
                    zIndex: 9998
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 149
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 150
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 157
        echo $this->getContext($context, "id");
        echo ".html('');

        Admin.log('[";
        // line 159
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 167
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo $this->getContext($context, "id");
        echo ");

                // populate the popup container
                field_dialog_";
        // line 170
        echo $this->getContext($context, "id");
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 174
        echo $this->getContext($context, "id");
        echo ").on('click', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
                jQuery('form', field_dialog_";
        // line 175
        echo $this->getContext($context, "id");
        echo ").on('submit', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 178
        echo $this->getContext($context, "id");
        echo ".dialog({
                    height: 'auto',
                    width: 850,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 184
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label"), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 186
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] dialog closed - removing  events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 188
        echo $this->getContext($context, "id");
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 189
        echo $this->getContext($context, "id");
        echo ").off('submit');
                    },
                    zIndex: 9998
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 198
        echo $this->getContext($context, "id");
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 210
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 212
        echo $this->getContext($context, "id");
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 226
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 236
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {

                Admin.log('[";
        // line 245
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] ajax success');

                if (typeof data == 'string') {
                    field_dialog_";
        // line 248
        echo $this->getContext($context, "id");
        echo ".html(data);
                    return;
                };

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (data.result == 'ok') {
                    field_dialog_";
        // line 255
        echo $this->getContext($context, "id");
        echo ".dialog('close');

                    ";
        // line 257
        if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
            // line 258
            echo "                        ";
            // line 262
            echo "                        jQuery('#";
            echo $this->getContext($context, "id");
            echo "').val(data.objectId);
                        jQuery('#";
            // line 263
            echo $this->getContext($context, "id");
            echo "').change();

                    ";
        } else {
            // line 266
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 268
            echo $this->getContext($context, "id");
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 269
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => $this->getContext($context, "id"), "subclass" => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "code")));
            // line 275
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 280
            echo $this->getContext($context, "id");
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 281
            echo $this->getContext($context, "id");
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 288
            echo $this->getContext($context, "id");
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 293
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 298
        echo $this->getContext($context, "id");
        echo ".html(html);

                Admin.add_pretty_errors(field_dialog_";
        // line 300
        echo $this->getContext($context, "id");
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 303
        echo $this->getContext($context, "id");
        echo ").submit(field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 310
        echo $this->getContext($context, "id");
        echo " = false;

    function initialize_popup_";
        // line 312
        echo $this->getContext($context, "id");
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 314
        echo $this->getContext($context, "id");
        echo ") {
            field_dialog_";
        // line 315
        echo $this->getContext($context, "id");
        echo " = jQuery(\"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 318
        echo $this->getContext($context, "id");
        echo ");

            Admin.log('[";
        // line 320
        echo $this->getContext($context, "id");
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 327
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 329
        echo $this->getContext($context, "id");
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 334
        echo $this->getContext($context, "id");
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 338
        echo $this->getContext($context, "id");
        echo ")
            .trigger('click')
        ;

        return false;
    }

    Admin.add_pretty_errors(field_dialog_";
        // line 345
        echo $this->getContext($context, "id");
        echo ");


    ";
        // line 348
        if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
            // line 349
            echo "        ";
            // line 352
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 354
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 358
            echo $this->getContext($context, "id");
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 362
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 369
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 374
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 381
            echo $this->getContext($context, "id");
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 384
            echo $this->getContext($context, "id");
            echo " option').get(0)) {
                jQuery('#";
            // line 385
            echo $this->getContext($context, "id");
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 388
            echo $this->getContext($context, "id");
            echo "').val('');
            jQuery('#";
            // line 389
            echo $this->getContext($context, "id");
            echo "').trigger('change');

            return false;
        }
        ";
            // line 396
            echo "
        // update the label
        jQuery('#";
            // line 398
            echo $this->getContext($context, "id");
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 400
            echo $this->getContext($context, "id");
            echo "] update the label');

            jQuery('#field_widget_";
            // line 402
            echo $this->getContext($context, "id");
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 405
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute($this->getContext($context, "associationadmin"), "uniqid"), "code" => $this->getAttribute($this->getContext($context, "associationadmin"), "code")));
            // line 409
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 412
            echo $this->getContext($context, "id");
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 418
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  701 => 418,  692 => 412,  685 => 405,  675 => 402,  665 => 398,  654 => 389,  650 => 388,  644 => 385,  634 => 381,  624 => 374,  616 => 369,  599 => 358,  588 => 352,  586 => 349,  584 => 348,  578 => 345,  561 => 334,  549 => 327,  529 => 315,  520 => 312,  497 => 300,  450 => 268,  433 => 258,  431 => 257,  416 => 248,  385 => 226,  299 => 174,  284 => 167,  242 => 140,  399 => 158,  396 => 157,  383 => 150,  359 => 140,  348 => 198,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  267 => 98,  237 => 85,  234 => 84,  218 => 77,  202 => 73,  167 => 60,  239 => 86,  225 => 89,  213 => 126,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  690 => 179,  687 => 409,  683 => 272,  676 => 262,  674 => 232,  670 => 400,  667 => 230,  661 => 396,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 384,  637 => 216,  632 => 213,  626 => 211,  623 => 210,  620 => 209,  606 => 362,  600 => 206,  595 => 203,  589 => 201,  581 => 199,  579 => 198,  576 => 197,  573 => 196,  555 => 195,  552 => 194,  550 => 193,  546 => 191,  544 => 190,  537 => 318,  521 => 163,  515 => 310,  509 => 159,  503 => 303,  499 => 155,  496 => 154,  490 => 153,  485 => 293,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 269,  448 => 139,  438 => 137,  432 => 135,  420 => 132,  417 => 130,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  366 => 142,  363 => 210,  354 => 119,  316 => 74,  281 => 61,  256 => 102,  245 => 88,  210 => 30,  207 => 83,  198 => 22,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 354,  590 => 178,  585 => 177,  551 => 174,  547 => 173,  542 => 320,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 314,  516 => 161,  512 => 160,  510 => 158,  505 => 156,  502 => 155,  498 => 134,  492 => 298,  486 => 130,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 275,  451 => 140,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 156,  371 => 144,  358 => 106,  349 => 103,  342 => 133,  339 => 100,  336 => 189,  329 => 126,  326 => 76,  319 => 90,  311 => 89,  297 => 84,  289 => 109,  286 => 80,  274 => 77,  263 => 104,  250 => 67,  233 => 62,  228 => 59,  191 => 69,  146 => 63,  344 => 97,  338 => 94,  335 => 129,  321 => 124,  295 => 66,  292 => 170,  259 => 55,  215 => 32,  190 => 50,  181 => 47,  161 => 38,  153 => 62,  150 => 58,  118 => 91,  110 => 46,  20 => 11,  114 => 71,  58 => 23,  568 => 338,  557 => 177,  553 => 329,  545 => 173,  540 => 188,  534 => 177,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 157,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 288,  470 => 135,  467 => 281,  463 => 280,  460 => 132,  449 => 123,  446 => 266,  441 => 138,  426 => 255,  419 => 98,  415 => 97,  410 => 245,  395 => 84,  392 => 83,  388 => 117,  386 => 95,  382 => 93,  380 => 83,  377 => 147,  369 => 157,  357 => 139,  347 => 115,  333 => 112,  324 => 92,  307 => 71,  300 => 68,  291 => 65,  288 => 85,  282 => 79,  275 => 77,  272 => 76,  226 => 36,  205 => 59,  197 => 119,  186 => 111,  148 => 53,  370 => 100,  367 => 131,  361 => 122,  352 => 138,  346 => 92,  343 => 91,  340 => 95,  332 => 188,  330 => 87,  327 => 186,  320 => 75,  315 => 90,  313 => 178,  310 => 81,  304 => 79,  302 => 114,  296 => 111,  293 => 75,  287 => 64,  280 => 82,  277 => 59,  271 => 58,  265 => 64,  262 => 63,  260 => 94,  257 => 61,  223 => 58,  192 => 55,  180 => 104,  174 => 118,  137 => 60,  97 => 63,  12 => 34,  170 => 61,  155 => 55,  127 => 76,  113 => 42,  90 => 34,  129 => 42,  100 => 22,  65 => 26,  70 => 25,  76 => 20,  84 => 33,  81 => 26,  185 => 65,  178 => 45,  175 => 72,  165 => 110,  160 => 68,  134 => 42,  126 => 51,  53 => 23,  34 => 16,  23 => 18,  270 => 100,  266 => 109,  261 => 107,  253 => 102,  249 => 89,  244 => 99,  236 => 93,  232 => 136,  216 => 25,  211 => 84,  200 => 55,  195 => 77,  188 => 68,  184 => 47,  172 => 112,  152 => 92,  124 => 52,  104 => 67,  77 => 28,  480 => 128,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 142,  444 => 149,  440 => 263,  437 => 147,  435 => 262,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 236,  393 => 125,  387 => 152,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 212,  365 => 111,  362 => 141,  360 => 109,  355 => 105,  341 => 114,  337 => 103,  322 => 184,  314 => 99,  312 => 89,  309 => 97,  305 => 175,  298 => 91,  294 => 111,  285 => 84,  283 => 106,  278 => 115,  268 => 157,  264 => 72,  258 => 150,  252 => 68,  247 => 66,  241 => 95,  229 => 73,  220 => 56,  214 => 75,  177 => 63,  169 => 71,  140 => 44,  132 => 47,  128 => 47,  107 => 24,  61 => 18,  273 => 159,  269 => 75,  254 => 149,  243 => 65,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 35,  221 => 78,  219 => 129,  217 => 87,  208 => 124,  204 => 28,  179 => 107,  159 => 49,  143 => 29,  135 => 81,  119 => 42,  102 => 39,  71 => 29,  67 => 27,  63 => 24,  59 => 18,  38 => 32,  93 => 39,  88 => 60,  78 => 53,  87 => 17,  44 => 19,  31 => 22,  21 => 12,  46 => 18,  26 => 20,  25 => 12,  28 => 14,  94 => 21,  89 => 37,  85 => 32,  75 => 28,  68 => 22,  56 => 40,  27 => 13,  24 => 11,  201 => 57,  196 => 71,  183 => 74,  171 => 102,  166 => 100,  163 => 69,  158 => 67,  156 => 93,  151 => 61,  142 => 50,  138 => 94,  136 => 48,  121 => 75,  117 => 41,  105 => 44,  91 => 38,  62 => 25,  49 => 20,  19 => 11,  79 => 31,  72 => 25,  69 => 50,  47 => 19,  40 => 19,  37 => 18,  22 => 11,  246 => 69,  157 => 64,  145 => 59,  139 => 49,  131 => 25,  123 => 50,  120 => 47,  115 => 45,  111 => 45,  108 => 42,  101 => 37,  98 => 36,  96 => 19,  83 => 36,  74 => 52,  66 => 25,  55 => 22,  52 => 21,  50 => 17,  43 => 33,  41 => 18,  35 => 22,  32 => 16,  29 => 21,  209 => 24,  203 => 122,  199 => 80,  193 => 70,  189 => 177,  187 => 75,  182 => 64,  176 => 45,  173 => 62,  168 => 65,  164 => 54,  162 => 57,  154 => 46,  149 => 64,  147 => 90,  144 => 62,  141 => 61,  133 => 51,  130 => 46,  125 => 44,  122 => 45,  116 => 43,  112 => 47,  109 => 69,  106 => 40,  103 => 38,  99 => 38,  95 => 37,  92 => 61,  86 => 33,  82 => 33,  80 => 29,  73 => 29,  64 => 26,  60 => 25,  57 => 23,  54 => 14,  51 => 38,  48 => 19,  45 => 20,  42 => 7,  39 => 17,  36 => 16,  33 => 13,  30 => 17,);
    }
}
