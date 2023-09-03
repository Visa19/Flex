<?php
$advertisementImages = scandir('Advertisment');
$advertisementImages = array_diff($advertisementImages, array('..', '.'));

foreach ($advertisementImages as $image) {
    // Get the image dimensions
    list($width, $height) = getimagesize('./Advertisment/' . $image);
    
    // Calculate the new dimensions while maintaining the aspect ratio
    $newWidth = 595;
    $newHeight = intval($height * ($newWidth / $width));

    echo '<div class="ad-item">';
    echo '<img src="./Advertisment/' . $image . '" alt="Advertisement" width="' . $newWidth . '" height="' . $newHeight . '">';
    echo '</div>';
}
?>


