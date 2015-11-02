<?php

class ArtMoi_Model_Image extends ArtMoi_Model_Moi
{
    public function imageUrlForSize( $width = 750, $height = 750 )
    {

    }

    // original width / original height x new height = new width
    public function ratioWidthForHeight( $height )
    {
        return $this->width / $this->height * $height;
    }

    // original height / original width x new width = new height
    public function ratioHeightForWidth( $width )
    {
        return $this->height / $this->width * $width;
    }

}