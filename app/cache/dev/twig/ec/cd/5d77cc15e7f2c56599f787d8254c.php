<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_eccd5d77cc15e7f2c56599f787d8254c extends Twig_Template
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
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo $this->getContext($context, "id");
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "code"), "elementId" => $this->getContext($context, "id"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                jQuery('#field_container_";
        // line 45
        echo $this->getContext($context, "id");
        echo "').replaceWith(html); // replace the html
                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 50
        echo $this->getContext($context, "id");
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 51
        echo $this->getContext($context, "id");
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 58
        echo $this->getContext($context, "id");
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 62
        echo $this->getContext($context, "id");
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 67
        echo $this->getContext($context, "id");
        echo " = jQuery(\"#field_widget_";
        echo $this->getContext($context, "id");
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 71
        echo $this->getContext($context, "id");
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 63,  614 => 205,  609 => 200,  602 => 196,  596 => 193,  592 => 191,  587 => 189,  576 => 185,  570 => 183,  559 => 179,  557 => 178,  554 => 177,  548 => 175,  546 => 174,  543 => 173,  540 => 172,  535 => 160,  531 => 129,  525 => 128,  516 => 125,  485 => 110,  460 => 103,  448 => 99,  445 => 98,  428 => 94,  401 => 49,  397 => 48,  388 => 45,  383 => 43,  367 => 39,  351 => 32,  342 => 29,  339 => 28,  336 => 27,  327 => 205,  316 => 171,  313 => 170,  307 => 167,  304 => 166,  253 => 148,  205 => 136,  198 => 133,  155 => 68,  686 => 206,  680 => 203,  677 => 202,  675 => 201,  669 => 198,  659 => 197,  654 => 195,  642 => 193,  639 => 192,  627 => 185,  624 => 184,  607 => 182,  590 => 190,  585 => 179,  581 => 187,  578 => 177,  575 => 176,  572 => 175,  566 => 171,  562 => 169,  555 => 167,  521 => 164,  517 => 163,  512 => 162,  509 => 161,  506 => 123,  503 => 122,  500 => 158,  498 => 121,  495 => 120,  486 => 151,  477 => 147,  475 => 146,  468 => 105,  462 => 123,  443 => 140,  432 => 136,  421 => 88,  416 => 129,  405 => 127,  386 => 115,  380 => 112,  377 => 111,  375 => 41,  371 => 109,  366 => 107,  359 => 106,  356 => 105,  340 => 97,  321 => 91,  318 => 90,  302 => 165,  282 => 79,  274 => 77,  254 => 68,  238 => 64,  233 => 62,  228 => 59,  110 => 64,  335 => 94,  331 => 94,  326 => 90,  276 => 152,  271 => 79,  255 => 69,  250 => 67,  218 => 57,  206 => 51,  190 => 50,  181 => 47,  175 => 43,  167 => 73,  636 => 191,  631 => 203,  625 => 201,  623 => 200,  617 => 206,  608 => 193,  604 => 192,  598 => 191,  595 => 190,  591 => 189,  586 => 187,  579 => 186,  571 => 183,  568 => 182,  565 => 181,  560 => 168,  549 => 98,  545 => 97,  538 => 165,  534 => 92,  529 => 91,  526 => 90,  514 => 79,  511 => 124,  507 => 102,  505 => 90,  501 => 88,  499 => 78,  496 => 77,  493 => 76,  489 => 111,  482 => 109,  472 => 145,  459 => 159,  456 => 121,  450 => 119,  442 => 155,  434 => 95,  431 => 152,  426 => 133,  415 => 87,  410 => 86,  400 => 119,  394 => 139,  391 => 118,  389 => 137,  370 => 40,  361 => 36,  357 => 35,  353 => 104,  347 => 31,  343 => 98,  332 => 117,  329 => 212,  324 => 92,  310 => 87,  301 => 111,  284 => 110,  279 => 153,  277 => 78,  273 => 151,  262 => 76,  259 => 150,  249 => 71,  223 => 58,  191 => 120,  185 => 83,  178 => 45,  174 => 51,  137 => 60,  323 => 82,  320 => 172,  315 => 79,  311 => 78,  306 => 87,  303 => 86,  296 => 161,  291 => 73,  289 => 157,  286 => 80,  280 => 69,  272 => 76,  263 => 71,  257 => 74,  251 => 59,  245 => 66,  242 => 143,  240 => 64,  237 => 54,  234 => 141,  226 => 138,  221 => 27,  146 => 34,  90 => 18,  12 => 33,  34 => 26,  20 => 1,  118 => 52,  100 => 22,  97 => 39,  65 => 30,  53 => 23,  161 => 70,  159 => 53,  150 => 66,  129 => 55,  58 => 23,  81 => 15,  76 => 20,  134 => 26,  127 => 66,  113 => 34,  102 => 41,  59 => 23,  269 => 75,  265 => 103,  260 => 62,  248 => 145,  243 => 65,  236 => 63,  232 => 140,  227 => 91,  216 => 86,  211 => 53,  200 => 134,  195 => 77,  188 => 73,  172 => 76,  152 => 67,  124 => 45,  104 => 23,  77 => 58,  63 => 50,  204 => 80,  201 => 71,  197 => 54,  194 => 14,  184 => 115,  179 => 112,  153 => 67,  23 => 18,  480 => 148,  474 => 106,  469 => 162,  461 => 160,  457 => 102,  453 => 101,  444 => 149,  440 => 97,  437 => 96,  435 => 137,  430 => 144,  427 => 143,  423 => 132,  413 => 146,  409 => 132,  407 => 85,  402 => 126,  398 => 129,  393 => 47,  387 => 122,  384 => 134,  381 => 120,  379 => 42,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 121,  337 => 96,  322 => 202,  314 => 99,  312 => 88,  309 => 97,  305 => 95,  298 => 84,  294 => 160,  285 => 155,  283 => 84,  278 => 68,  268 => 78,  264 => 84,  258 => 81,  252 => 72,  247 => 66,  241 => 67,  235 => 74,  229 => 139,  224 => 71,  220 => 63,  214 => 69,  208 => 137,  169 => 43,  143 => 72,  140 => 44,  132 => 51,  128 => 55,  119 => 49,  107 => 24,  38 => 6,  71 => 30,  177 => 78,  165 => 16,  160 => 70,  135 => 58,  126 => 51,  114 => 50,  84 => 62,  70 => 32,  67 => 51,  61 => 18,  28 => 14,  26 => 20,  94 => 42,  89 => 40,  85 => 37,  75 => 35,  68 => 22,  56 => 27,  196 => 21,  183 => 70,  171 => 94,  166 => 73,  163 => 49,  158 => 81,  156 => 68,  151 => 66,  142 => 59,  138 => 57,  136 => 51,  121 => 53,  117 => 47,  105 => 26,  91 => 25,  62 => 29,  49 => 21,  24 => 13,  87 => 17,  31 => 15,  25 => 3,  21 => 11,  19 => 11,  93 => 14,  88 => 31,  78 => 29,  46 => 35,  44 => 19,  27 => 4,  79 => 14,  72 => 20,  69 => 32,  47 => 20,  40 => 18,  37 => 17,  22 => 12,  246 => 70,  157 => 83,  145 => 63,  139 => 60,  131 => 25,  123 => 54,  120 => 53,  115 => 27,  111 => 45,  108 => 47,  101 => 71,  98 => 21,  96 => 43,  83 => 59,  74 => 56,  66 => 25,  55 => 45,  52 => 21,  50 => 20,  43 => 19,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 82,  203 => 135,  199 => 67,  193 => 130,  189 => 20,  187 => 49,  182 => 54,  176 => 111,  173 => 76,  168 => 17,  164 => 67,  162 => 62,  154 => 53,  149 => 36,  147 => 64,  144 => 62,  141 => 61,  133 => 57,  130 => 56,  125 => 55,  122 => 22,  116 => 49,  112 => 49,  109 => 44,  106 => 46,  103 => 45,  99 => 44,  95 => 20,  92 => 67,  86 => 39,  82 => 27,  80 => 36,  73 => 19,  64 => 174,  60 => 14,  57 => 22,  54 => 16,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 18,  36 => 17,  33 => 15,  30 => 15,);
    }
}
