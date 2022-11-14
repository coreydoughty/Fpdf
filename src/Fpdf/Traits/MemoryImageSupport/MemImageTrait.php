<?php

namespace Fpdf\Traits\MemoryImageSupport;
/*******************************************************************************
 * FPDF-Script: Memory image support                                           *
 *                                                                             *
 * Date:    2004-04-05                                                         *
 * Author:  Olivier PLATHEY                                                    *
 *******************************************************************************/

trait MemImageTrait
{
    private $memImageInitialized = false;

    /**
     * Constructors do not work well in traits. It's better to create our own initialization.
     */
    private function memImageInitialize()
    {
        if ($this->memImageInitialized || in_array('var', stream_get_wrappers())) {
            return;
        }

        stream_wrapper_register('var', VariableStream::class);
        $this->memImageInitialized = true;
    }

    public function MemImage($data, $x=null, $y=null, $w=0, $h=0, $link='')
    {
        $this->memImageInitialize();

        // Display the image contained in $data
        $v = 'img'.md5($data);
        $GLOBALS[$v] = $data;
        $a = getimagesize('var://'.$v);
        if(!$a)
            $this->Error('Invalid image data');
        $type = substr(strstr($a['mime'],'/'),1);
        $this->Image('var://'.$v, $x, $y, $w, $h, $type, $link);
        unset($GLOBALS[$v]);
    }

    public function GDImage($im, $x=null, $y=null, $w=0, $h=0, $link='')
    {
        // Display the GD image associated with $im
        ob_start();
        imagepng($im);
        $data = ob_get_clean();
        $this->MemImage($data, $x, $y, $w, $h, $link);
    }
}
