<?php
/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\SeoBundle\Seo;

use Sonata\PageBundle\Model\SiteInterface;

/**
 *
 * http://en.wikipedia.org/wiki/Meta_element
 *
 */
class SeoPage implements SeoPageInterface
{
    protected $title;
    
    protected $gacode;

    protected $metas;

    protected $htmlAttributes;

    protected $linkCanonical;

    protected $separator;

    protected $headAttributes;

    /**
     * {@inheritdoc}
     */
    public function __construct($title = '', $gacode = '')
    {
        $this->title       = $title;
        $this->gacode      = $gacode;
        $this->metas                = array(
            'http-equiv' => array(),
            'name'       => array(),
            'schema'     => array(),
            'charset'    => array(),
            'property'   => array(),
        );

        $this->headAttributes = array();
        $this->linkCanonical = '';
        $this->separator = ' ';
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addTitle($title)
    {
        $this->title = $title . $this->separator . $this->title;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * {@inheritdoc}
     */
    public function setGacode($gacode)
    {
        $this->gacode = $gacode;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addGacode($gacode)
    {
        $this->gacode = $gacode . $this->separator . $this->gacode;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getGacode()
    {       
        return $this->gacode;
    }
    /**
     * {@inheritdoc}
     */
    public function getMetas()
    {
        return $this->metas;
    }

    /**
     * {@inheritdoc}
     */
    public function addMeta($type, $name, $content, array $extras = array())
    {
        if (!isset($this->metas[$type])) {
            $this->metas[$type] = array();
        }

        $this->metas[$type][$name] = array($content, $extras);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setMetas(array $metadatas)
    {
        $this->metas = array();

        foreach ($metadatas as $type => $metas) {
            if (!is_array($metas)) {
                throw new \RuntimeException('$metas must be an array');
            }

            foreach ($metas as $name => $meta) {
                list($content, $extras) = $this->normalize($meta);

                $this->addMeta($type, $name, $content, $extras);
            }
        }

        return $this;
    }

    /**
     * @param mixed $meta
     *
     * @return array
     */
    private function normalize($meta)
    {
        if (is_string($meta)) {
            return array($meta, array());
        }

        return $meta;
    }

    /**
     * {@inheritdoc}
     */
    public function setHtmlAttributes(array $attributes)
    {
        $this->htmlAttributes = $attributes;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addHtmlAttributes($name, $value)
    {
        $this->htmlAttributes[$name] = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getHtmlAttributes()
    {
        return $this->htmlAttributes;
    }

    /**
     * {@inheritdoc}
     */
    public function setLinkCanonical($link)
    {
        $this->linkCanonical = $link;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkCanonical()
    {
        return $this->linkCanonical;
    }

    /**
     * {@inheritdoc}
     */
    public function setSeparator($separator)
    {
        $this->separator = $separator;
    }
}
