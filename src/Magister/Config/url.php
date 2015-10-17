<?php

return [

    /*
     |--------------------------------------------------------------------------
     | User
     |--------------------------------------------------------------------------
     */
    'user' => 'account',

    /*
     |--------------------------------------------------------------------------
     | Profile
     |--------------------------------------------------------------------------
     */
    'profile' => 'personen/:id/profiel',
    
    'address' => 'personen/:id/adressen',

    'education' => 'personen/:id/opleidinggegevensprofiel',

    /*
     |--------------------------------------------------------------------------
     | Enrollment
     |-------------------------------------------------------------------------
     */
    'enrollment' => 'personen/:id/aanmeldingen',

    'counsellor' => 'groepen/:group/mentoren',

    /*
     |--------------------------------------------------------------------------
     | Appointment
     |--------------------------------------------------------------------------
     */
    'appointment' => 'personen/:id/afspraken',

    /*
     |--------------------------------------------------------------------------
     | Course
     |--------------------------------------------------------------------------
     */
    'course' => 'personen/:id/aanmeldingen/:enrollment/vakken',

    /*
     |--------------------------------------------------------------------------
     | Grade
     |--------------------------------------------------------------------------
     */
    'grade' => 'personen/:id/aanmeldingen/:enrollment/cijfers/cijferoverzichtvooraanmelding',

    'info' => 'personen/:id/aanmeldingen/:enrollment/cijfers/extracijferkolominfo/:cijfer',

    /*
     |--------------------------------------------------------------------------
     | Message
     |--------------------------------------------------------------------------
     */
    'inbox' => 'personen/:id/berichten?mapId=1',

    'message' => 'personen/:id/berichten/:message?berichtSoort=Bericht'
];
