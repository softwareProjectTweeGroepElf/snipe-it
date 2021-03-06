<?php

return array(

    'does_not_exist' => 'Engedély nem létezik.',
    'user_does_not_exist' => 'Felhasználó nem létezik.',
    'asset_does_not_exist' 	=> 'A licencel társítani kívánt eszköz nem létezik.',
    'owner_doesnt_match_asset' => 'The asset you are trying to associate with this license is owned by somene other than the person selected in the assigned to dropdown.',
    'assoc_users'	 => 'This license is currently checked out to a user and cannot be deleted. Please check the license in first, and then try deleting again. ',


    'create' => array(
        'error'   => 'License was not created, please try again.',
        'success' => 'License created successfully.'
    ),

    'deletefile' => array(
        'error'   => 'File not deleted. Please try again.',
        'success' => 'File successfully deleted.',
    ),

    'upload' => array(
        'error'   => 'File(s) not uploaded. Please try again.',
        'success' => 'File(s) successfully uploaded.',
        'nofiles' => 'You did not select any files for upload, or the file you are trying to upload is too large',
<<<<<<< HEAD
        'invalidfiles' => 'One or more of your files is too large or is a filetype that is not allowed. Allowed filetypes are png, gif, jpg, doc, docx, pdf, and txt.',
=======
        'invalidfiles' => 'One or more of your files is too large or is a filetype that is not allowed. Allowed filetypes are png, gif, jpg, doc, docx, pdf, txt, zip, rar, and rtf.',
>>>>>>> 62f5a1b2c7934f534fc8fc8299831fc32e794a72
    ),

    'update' => array(
        'error'   => 'License was not updated, please try again',
        'success' => 'License updated successfully.'
    ),

    'delete' => array(
        'confirm'   => 'Are you sure you wish to delete this license?',
        'error'   => 'There was an issue deleting the license. Please try again.',
        'success' => 'The license was deleted successfully.'
    ),

    'checkout' => array(
        'error'   => 'There was an issue checking out the license. Please try again.',
        'success' => 'The license was checked out successfully'
    ),

    'checkin' => array(
        'error'   => 'There was an issue checking in the license. Please try again.',
        'success' => 'The license was checked in successfully'
    ),

);
