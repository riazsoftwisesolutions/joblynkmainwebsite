<?php return array (
  'App\\Providers\\EventServiceProvider' => 
  array (
    'Illuminate\\Auth\\Events\\Registered' => 
    array (
      0 => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
    ),
    'App\\Events\\SupportMessage' => 
    array (
      0 => 'App\\Listeners\\SupportSendMailToAdmin',
      1 => 'App\\Listeners\\SupportSendMailToUser',
    ),
    'App\\Events\\DonationSuccess' => 
    array (
      0 => 'App\\Listeners\\DonationDatabaseUpdate',
      1 => 'App\\Listeners\\DonationSuccessMailSend',
    ),
    'App\\Events\\ProductOrders' => 
    array (
      0 => 'App\\Listeners\\ProductOrderDatabaseUpdate',
      1 => 'App\\Listeners\\ProductOrderSuccessMailSend',
    ),
    'App\\Events\\AttendanceBooking' => 
    array (
      0 => 'App\\Listeners\\AttendanceBookingDatabaseUpdate',
      1 => 'App\\Listeners\\AttendanceBookingSuccessMailSendAdmin',
      2 => 'App\\Listeners\\AttendanceBookingSuccessMailSendUser',
    ),
    'App\\Events\\JobApplication' => 
    array (
      0 => 'App\\Listeners\\JobApplicationDatabaseUpdate',
      1 => 'App\\Listeners\\JobApplicationSuccessMailSendAdmin',
      2 => 'App\\Listeners\\JobApplicationSuccessMailSendUser',
    ),
    'App\\Events\\PackagesOrderSuccess' => 
    array (
      0 => 'App\\Listeners\\PakcagesOrderDatabaseUpdate',
      1 => 'App\\Listeners\\PakcagesOrderSuccessMailSendAdmin',
      2 => 'App\\Listeners\\PakcagesOrderSuccessMailSendUser',
    ),
    'App\\Events\\AppointmentBooking' => 
    array (
      0 => 'App\\Listeners\\AppointmentBookingDatabaseUpdate',
      1 => 'App\\Listeners\\AppointmentBookingSuccessMailSend',
    ),
    'App\\Events\\CourseEnrollSuccess' => 
    array (
      0 => 'App\\Listeners\\CourseEnrollDatabaseUpdate',
      1 => 'App\\Listeners\\CourseEnrollSuccessMailSend',
    ),
  ),
);