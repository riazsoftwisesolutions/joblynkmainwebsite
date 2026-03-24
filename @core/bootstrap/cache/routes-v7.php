<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/queries/explain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.queries.explain',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/xgpayment-gateway/powertransz' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.powertransz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/xgpayment-gateway/authorizenet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.authorizenet',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/xgpayment-gateway/stipe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.stripe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/xgpayment-gateway/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.paystack',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/xgpayment-gateway/paystack-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'xg.payment.gateway.paystack.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/license-activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'license.activation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/license-activation-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'license.activation.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check.system.update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paymentIPN' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IdUr9WzDVJzvEisW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/feeds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feeds.main',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/poplar-item-by-category-ajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.popular.item.by.category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-story-item-by-category-ajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.story.product.item.by.category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/advertisement/click/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.home.advertisement.click.store',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home/advertisement/impression/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.home.advertisement.impression.store',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.static.order.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facebook.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facebook/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.facebook.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'google.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/google/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.google.redirect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submit-custom-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.form.builder.custom.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/support-ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.support.ticket',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/support-ticket/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.support.ticket.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/courses/course-enroll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.enroll.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/courses-coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.apply.coupon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/courses-review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.review',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.paypal.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.paytm.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-stripe-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.stripe.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.razorpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-mollie-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.mollie.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-flutterwave-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.flutterwave.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.midtrans.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.payfast.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.cashfree.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.instamojo.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.marcadopago.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-squreup-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.squreup.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-cinetpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.cinetpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-paytabs-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.paytabs.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-billplz-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.billplz.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-zitopay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.zitopay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-toyyibpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.toyyibpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-pagalipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.pagalipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-authorizenet-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.authorizenet.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-senangpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.senangpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-iyzipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.iyzipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/course-awdpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.awdpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.review',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.paypal.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.paytm.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-stripe-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.stripe.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.razorpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-mollie-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.mollie.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-flutterwave-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.flutterwave.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.midtrans.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.payfast.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.cashfree.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.instamojo.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.marcadopago.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-squreup-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.squreup.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-cinetpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.cinetpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-paytabs-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.paytabs.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-billplz-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.billplz.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-zitopay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.zitopay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-toyyibpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.toyyibpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-pagalipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.pagalipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-authorizenet-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.authorizenet.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-senangpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.senangpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-iyzipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.iyzipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-awdpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.awdpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-booking-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.booking.time.check',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/knowledgebase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.knowledgebase',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/knowledgebase-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.knowledgebase.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.paypal.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.paytm.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-stripe-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.stripe.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.razorpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-mollie-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.mollie.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-flutterwave-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.flutterwave.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.midtrans.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.payfast.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.cashfree.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.instamojo.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.marcadopago.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-squreup-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.squreup.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-cinetpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.cinetpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-paytabs-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.paytabs.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-billplz-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.billplz.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-zitopay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.zitopay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-toyyibpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.toyyibpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-pagalipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.pagalipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-authorizenet-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.authorizenet.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-senangpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.senangpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-iyzipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.iyzipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-awdpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.awdpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-cart/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.cart.ajax.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-wishlist/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.wishlist.ajax.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-item/add-to-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-item/ajax/add-to-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.cart.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-item/ajax/add-to-wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.add.to.wishlist.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-item/ajax/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.coupon.code',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-item/ajax/shipping' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.shipping.apply',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-item/ajax/cart-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.ajax.cart.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vQAcR0Qlru6fVHdU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-ratings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.ratings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-remove-coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.coupon.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.paypal.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.paytm.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-stripe-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.stripe.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.razorpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-mollie-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.mollie.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-flutterwave-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.flutterwave.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.midtrans.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.payfast.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.cashfree.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.instamojo.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.marcadopago.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-squreup-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.squreup.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-cinetpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.cinetpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-paytabs-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.paytabs.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-billplz-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.billplz.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-zitopay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.zitopay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-toyyibpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.toyyibpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-pagalipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.pagalipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-authorizenet-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.authorizenet.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-senangpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.senangpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-iyzipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.iyzipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-awdpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.awdpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paystack-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.paystack.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.paystack.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.events',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.events.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.booking.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.paypal.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.paytm.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-stripe-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.stripe.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.razorpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-mollie-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.mollie.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-flutterwave-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.flutterwave.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.midtrans.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.payfast.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.cashfree.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.instamojo.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.marcadopago.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-squreup-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.squreup.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-cinetpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.cinetpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-paytabs-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.paytabs.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-billplz-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.billplz.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-zitopay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.zitopay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-toyyibpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.toyyibpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-pagalipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.pagalipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-authorizenet-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.authorizenet.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-senangpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.senangpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-iyzipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.iyzipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-awdpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.awdpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/booking-confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.payment.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/career' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.jobs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/career-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.jobs.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/apply' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.jobs.apply.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.paytm.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-stripe-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.stripe.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.razorpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-mollie-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.mollie.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-flutterwave-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.flutterwave.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.midtrans.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.payfast.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.cashfree.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.instamojo.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.marcadopago.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-squreup-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.squreup.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-cinetpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.cinetpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-paytabs-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.paytabs.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-billplz-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.billplz.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-zitopay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.zitopay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-toyyibpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.toyyibpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-pagalipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.pagalipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-authorizenet-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.authorizenet.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-senangpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.senangpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-iyzipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.iyzipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/job-awdpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.awdpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homepage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-touch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.get.touch',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/appointment-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service-quote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.service.quote',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/case-study-quote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.case.study.quote',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order-confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.order.payment.form',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-paypal-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.paypal.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-paytm-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.paytm.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-stripe-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.stripe.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-razorpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.razorpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-mollie-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.mollie.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-flutterwave-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.flutterwave.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-midtrans-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.midtrans.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-payfast-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.payfast.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-cashfree-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.cashfree.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-instamojo-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.instamojo.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-marcadopago-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.marcadopago.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-squreup-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.squreup.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-cinetpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.cinetpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-paytabs-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.paytabs.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-billplz-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.billplz.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-zitopay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.zitopay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-toyyibpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.toyyibpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-pagalipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.pagalipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-authorizenet-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.authorizenet.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-senangpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.senangpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-iyzipay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.iyzipay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan-awdpay-ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan.awdpay.ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products-user/generate-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.invoice.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donation-user/generate-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.invoice.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/event-user/generate-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.invoice.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package-user/generate-invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.package.invoice.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donor-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donor.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.price.plan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.request.quote',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/case-study' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.work',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.testimonials',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/feedback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.feedback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clients-feedback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.clients.feedback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clients-feedback/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.clients.feedback.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/image-gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.image.gallery',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/video-gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.video.gallery',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g0rzhCLGqceNwAqP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.ajax.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YVDmFGzMovHqfelO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.forget.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u0fAWzrXZ7tB2CRI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.reset.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/email-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.email.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D1TTVnugtgqCmh7K',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/resend-verify-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.resend.verify.mail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/request-quote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.quote.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/request-estimate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.estimate.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/package-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.package.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/product-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.product.order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/product-download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.product.download',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/events-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.event.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/donations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.donations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/appointment-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.appointment.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/course-enroll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.course.enroll',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/support-tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.support.tickets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.change.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/edit-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.home.edit.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/profile-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/password-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/package-order/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.package.order.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/product-order/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.product.order.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/event-order/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.event.order.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/donation-order/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.donation.order.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/appointment-order/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.appointment.order.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/course-order/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.course.order.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/course-certificate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.course.certificate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/support-ticket/priority-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.priority.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/support-ticket/status-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.status.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/support-ticket/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-home/event-user/generate-ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.event.ticket.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HHf0eh4Q95DTmEmp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/admin/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::smrixtY2TK4wb239',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/admin/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.langchange',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribe-newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.subscribe.newsletter',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.contact.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/place-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.order.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/do(?|wnload\\-update/([^/]++)/([^/]++)(*:119)|nation(?|s/(?|([^/]++)(*:149)|donation(*:165))|\\-(?|success/([^/]++)(*:195)|cancel/([^/]++)(*:218))))|/c(?|ourses(?|/([^/]++)/([^/]++)(*:261)|\\-(?|category/([^/]++)(?:/([^/]++))?(*:305)|enroll/([^/]++)(*:328)|([^/\\-]++)\\-lesson(?|/([^/]++)(*:366)|(*:374))|instructor/([^/]++)/([^/]++)(*:411)|success/([^/]++)(*:435)|cancel/([^/]++)(*:458)))|a(?|reer(?|/([^/]++)(*:488)|\\-category/([^/]++)/([^/]++)(*:524))|se\\-study/(?|([^/]++)(*:554)|category/([^/]++)(?:/([^/]++))?(*:593))))|/a(?|pp(?|ointment(?|/([^/]++)/([^/]++)(*:643)|\\-(?|ca(?|tegory/([^/]++)(?:/([^/]++))?(*:690)|ncel/([^/]++)(*:711))|success/([^/]++)(*:736)))|ly/([^/]++)(*:757))|ttendance\\-(?|success/([^/]++)(*:796)|cancel/([^/]++)(*:819)))|/knowledgebase(?|/([^/]++)(*:855)|\\-category/([^/]++)(?:/([^/]++))?(*:896))|/pr(?|oducts(?|/([^/]++)(*:929)|\\-(?|ca(?|tegory/([^/]++)(?:/([^/]++))?(*:976)|ncel/([^/]++)(*:997))|su(?|bcategory/([^/]++)(?:/([^/]++))?(*:1043)|ccess/([^/]++)(*:1066))|download/([^/]++)(*:1093)))|ice\\-plan/([^/]++)(*:1122))|/events(?|/([^/]++)(*:1151)|\\-(?|category/([^/]++)(?:/([^/]++))?(*:1196)|booking/([^/]++)(*:1221)))|/b(?|ooking\\-confirm/([^/]++)(*:1261)|log(?|/([^/]++)(*:1285)|\\-(?|category/([^/]++)/([^/]++)(*:1325)|tags/([^/]++)(*:1347))))|/job\\-(?|success/([^/]++)(*:1384)|cancel/([^/]++)(*:1408))|/s(?|ubscriber/email\\-verify/([^/]++)(*:1455)|ervice/(?|category/([^/]++)(?:/([^/]++))?(*:1505)|([^/]++)(*:1522)))|/order\\-(?|success/([^/]++)(*:1560)|c(?|ancel/([^/]++)(*:1587)|onfirm/([^/]++)(*:1611)))|/login/(?|reset\\-password/([^/]++)/([^/]++)(*:1665)|admin/reset\\-password/([^/]++)/([^/]++)(*:1713))|/home/([^/]++)(*:1737)|/user\\-home/(?|download/file/([^/]++)(*:1783)|product\\-order/view/([^/]++)(*:1820)|course\\-certificate/download/([^/]++)(*:1866)|support\\-ticket/view/([^/]++)(*:1904))|/([^/]++)(*:1923))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.download',
          ),
          1 => 
          array (
            0 => 'productId',
            1 => 'tenant',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donations.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donations.log.store',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.payment.success',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.donation.payment.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.single',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.category',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.enroll',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.lesson',
          ),
          1 => 
          array (
            0 => 'course_id',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.lesson.start',
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      411 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.instructor',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.payment.success',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.course.payment.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.jobs.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.jobs.category',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.work.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.works.category',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.single',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.category',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.payment.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.appointment.payment.success',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.jobs.apply',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.payment.success',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      819 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.payment.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.knowledgebase.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.knowledgebase.category',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      976 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.category',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      997 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.payment.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.products.subcategory',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1066 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.payment.success',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1093 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.product.download',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.plan.order',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.events.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.events.category',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.booking',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.event.booking.confirm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.category',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1347 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.tags.page',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.payment.success',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.job.payment.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscriber.verify',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.services.category',
            'any' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.services.single',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.order.payment.success',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.order.payment.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.order.confirm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.reset.password',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset.password',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.homepage.demo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.download.file',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.product.order.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.course.certificate.download',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard.support.ticket.view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.dynamic.page',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.queries.explain' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_debugbar/queries/explain',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'as' => 'debugbar.queries.explain',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.powertransz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'xgpayment-gateway/powertransz',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PowertranszPaymentController@charge_customer',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PowertranszPaymentController@charge_customer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.powertransz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.authorizenet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'xgpayment-gateway/authorizenet',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\AuthorizeNetPaymentController@charge_customer',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\AuthorizeNetPaymentController@charge_customer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.authorizenet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.stripe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'xgpayment-gateway/stipe',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\StripePaymentController@charge_customer',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\StripePaymentController@charge_customer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.stripe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.paystack' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'xgpayment-gateway/paystack',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@redirect_to_gateway',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@redirect_to_gateway',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.paystack',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'xg.payment.gateway.paystack.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'xgpayment-gateway/paystack-callback',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@callback',
        'controller' => 'Xgenious\\Paymentgateway\\Http\\Controllers\\PaystackPaymentController@callback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'xg.payment.gateway.paystack.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'license.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'license-activation',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivation',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivation',
        'as' => 'license.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'license.activation.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'license-activation-update',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivationUpdate',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\ActivationController@licenseActivationUpdate',
        'as' => 'license.activation.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'check.system.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'check-update',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@checkSystemUpdate',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@checkSystemUpdate',
        'as' => 'check.system.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.download' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'download-update/{productId}/{tenant}',
      'action' => 
      array (
        'uses' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@updateDownloadLatestVersion',
        'controller' => 'Xgenious\\XgApiClient\\Http\\Controllers\\SystemUpgradeController@updateDownloadLatestVersion',
        'as' => 'update.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paymentIPN',
      'action' => 
      array (
        'uses' => 'Paytabscom\\Laravel_paytabs\\Controllers\\PaytabsLaravelListenerApi@paymentIPN',
        'controller' => 'Paytabscom\\Laravel_paytabs\\Controllers\\PaytabsLaravelListenerApi@paymentIPN',
        'as' => 'payment_ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IdUr9WzDVJzvEisW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000ee80000000000000000";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IdUr9WzDVJzvEisW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feeds.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'feeds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Spatie\\Feed\\Http\\FeedController@__invoke',
        'controller' => '\\Spatie\\Feed\\Http\\FeedController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'feeds.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.popular.item.by.category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'poplar-item-by-category-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@popular_item_by_category',
        'controller' => 'App\\Http\\Controllers\\FrontendController@popular_item_by_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.popular.item.by.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.story.product.item.by.category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-story-item-by-category-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_story_item_by_category',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_story_item_by_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.story.product.item.by.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.home.advertisement.click.store' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/advertisement/click/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@home_advertisement_click_store',
        'controller' => 'App\\Http\\Controllers\\FrontendController@home_advertisement_click_store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.home.advertisement.click.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.home.advertisement.impression.store' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/advertisement/impression/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@home_advertisement_impression_store',
        'controller' => 'App\\Http\\Controllers\\FrontendController@home_advertisement_impression_store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.home.advertisement.impression.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.static.order.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@static_payment_cancel_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@static_payment_cancel_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.static.order.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facebook.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@facebook_callback',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@facebook_callback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/facebook',
        'where' => 
        array (
        ),
        'as' => 'facebook.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.facebook.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facebook/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@facebook_redirect',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@facebook_redirect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/facebook',
        'where' => 
        array (
        ),
        'as' => 'login.facebook.redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'google.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@google_callback',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@google_callback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/google',
        'where' => 
        array (
        ),
        'as' => 'google.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.google.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'google/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\SocialLoginController@google_redirect',
        'controller' => 'App\\Http\\Controllers\\SocialLoginController@google_redirect',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/google',
        'where' => 
        array (
        ),
        'as' => 'login.google.redirect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.form.builder.custom.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit-custom-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@custom_form_builder_message',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@custom_form_builder_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.form.builder.custom.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.support.ticket' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'support-ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:support_ticket_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SupportTicketController@page',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SupportTicketController@page',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.support.ticket',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.support.ticket.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'support-ticket/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:support_ticket_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\SupportTicketController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\SupportTicketController@store',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.support.ticket.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@page',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@page',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses/{slug?}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@single',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@single',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses-category/{id}/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@category',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@category',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.enroll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses-enroll/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@enroll',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@enroll',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.enroll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.enroll.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'courses/course-enroll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@enroll_now',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@enroll_now',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.enroll.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.lesson' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses-{course_id}-lesson/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@lesson_preview',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@lesson_preview',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.lesson',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.lesson.start' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses-{course_id}-lesson',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@lesson_start',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@lesson_start',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.lesson.start',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.instructor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses-instructor/{slug?}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@instructor',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@instructor',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.instructor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.apply.coupon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'courses-coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@apply_coupon',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@apply_coupon',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.apply.coupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.review' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'courses-review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@review',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@review',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.review',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses-success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@payment_success',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@payment_success',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.payment.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'courses-cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseController@payment_cancel',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseController@payment_cancel',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.payment.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.paypal.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@paypal_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@paypal_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.paypal.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.paytm.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@paytm_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@paytm_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.paytm.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.stripe.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-stripe-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@stripe_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@stripe_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.stripe.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.razorpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@razorpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@razorpay_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.razorpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.mollie.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-mollie-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@mollie_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@mollie_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.mollie.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.flutterwave.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-flutterwave-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@flutterwave_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@flutterwave_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.flutterwave.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.midtrans.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@midtrans_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@midtrans_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.midtrans.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.payfast.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@payfast_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@payfast_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.payfast.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.cashfree.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@cashfree_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@cashfree_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.cashfree.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.instamojo.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@instamojo_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@instamojo_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.instamojo.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.marcadopago.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@marcadopago_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@marcadopago_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.marcadopago.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.squreup.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-squreup-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@squreup_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@squreup_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.squreup.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.cinetpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-cinetpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@cinetpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@cinetpay_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.cinetpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.paytabs.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-paytabs-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@paytabs_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@paytabs_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.paytabs.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.billplz.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-billplz-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@billplz_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@billplz_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.billplz.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.zitopay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-zitopay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@zitopay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@zitopay_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.zitopay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.toyyibpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-toyyibpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@toyyibpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@toyyibpay_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.toyyibpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.pagalipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-pagalipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@pagalipay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@pagalipay_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.pagalipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.authorizenet.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-authorizenet-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@authorizenet_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@authorizenet_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.authorizenet.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.senangpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-senangpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@senangpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@senangpay_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.senangpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.iyzipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'course-iyzipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@iyzipay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@iyzipay_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.iyzipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.course.awdpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'course-awdpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
        ),
        0 => 'moduleCheck:course_module_status',
        'uses' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@awdpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CourseEnrollController@awdpay_ipn',
        'namespace' => 'App\\Http\\Controllers\\Frontend',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.course.awdpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@page',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment/{slug?}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@single',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@single',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-category/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@category',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@search',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.booking' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@booking',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@booking',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.review' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@review',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@review',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.review',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@payment_success',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@payment_success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.payment.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@payment_cancel',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@payment_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.payment.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.paypal.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@paypal_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@paypal_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.paypal.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.paytm.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@paytm_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@paytm_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.paytm.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.stripe.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-stripe-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@stripe_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@stripe_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.stripe.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.razorpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@razorpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@razorpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.razorpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.mollie.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-mollie-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@mollie_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@mollie_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.mollie.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.flutterwave.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-flutterwave-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@flutterwave_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@flutterwave_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.flutterwave.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.midtrans.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@midtrans_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@midtrans_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.midtrans.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.payfast.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@payfast_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@payfast_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.payfast.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.cashfree.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@cashfree_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@cashfree_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.cashfree.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.instamojo.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@instamojo_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@instamojo_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.instamojo.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.marcadopago.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@marcadopago_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@marcadopago_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.marcadopago.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.squreup.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-squreup-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@squreup_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@squreup_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.squreup.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.cinetpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-cinetpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@cinetpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@cinetpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.cinetpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.paytabs.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-paytabs-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@paytabs_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@paytabs_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.paytabs.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.billplz.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-billplz-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@billplz_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@billplz_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.billplz.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.zitopay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-zitopay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@zitopay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@zitopay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.zitopay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.toyyibpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-toyyibpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@toyyibpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@toyyibpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.toyyibpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.pagalipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-pagalipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@pagalipay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@pagalipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.pagalipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.authorizenet.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-authorizenet-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@authorizenet_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@authorizenet_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.authorizenet.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.senangpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-senangpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@senangpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@senangpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.senangpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.iyzipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-iyzipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@iyzipay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@iyzipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.iyzipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.awdpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'appointment-awdpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@awdpay_ipn',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentBookingController@awdpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.awdpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.booking.time.check' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-booking-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:appointment_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@appointment_booking_time_check',
        'controller' => 'App\\Http\\Controllers\\Frontend\\AppointmentController@appointment_booking_time_check',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.booking.time.check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.knowledgebase' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'knowledgebase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:knowledgebase_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@knowledgebase',
        'controller' => 'App\\Http\\Controllers\\FrontendController@knowledgebase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.knowledgebase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.knowledgebase.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'knowledgebase/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:knowledgebase_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@knowledgebase_single',
        'controller' => 'App\\Http\\Controllers\\FrontendController@knowledgebase_single',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.knowledgebase.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.knowledgebase.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'knowledgebase-category/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:knowledgebase_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@knowledgebase_category',
        'controller' => 'App\\Http\\Controllers\\FrontendController@knowledgebase_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.knowledgebase.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.knowledgebase.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'knowledgebase-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:knowledgebase_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@knowledgebase_search',
        'controller' => 'App\\Http\\Controllers\\FrontendController@knowledgebase_search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.knowledgebase.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@donations',
        'controller' => 'App\\Http\\Controllers\\FrontendController@donations',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donations',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donations.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donations/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@donations_single',
        'controller' => 'App\\Http\\Controllers\\FrontendController@donations_single',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donations.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donations.log.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donations/donation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@store_donation_logs',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@store_donation_logs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donations.log.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@donation_payment_success',
        'controller' => 'App\\Http\\Controllers\\FrontendController@donation_payment_success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.payment.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@donation_payment_cancel',
        'controller' => 'App\\Http\\Controllers\\FrontendController@donation_payment_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.payment.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.paypal.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@paypal_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@paypal_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.paypal.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.paytm.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@paytm_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@paytm_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.paytm.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.stripe.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-stripe-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@stripe_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@stripe_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.stripe.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.razorpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@razorpay_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@razorpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.razorpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.mollie.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-mollie-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@mollie_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@mollie_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.mollie.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.flutterwave.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-flutterwave-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@flutterwave_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@flutterwave_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.flutterwave.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.midtrans.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@midtrans_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@midtrans_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.midtrans.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.payfast.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@payfast_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@payfast_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.payfast.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.cashfree.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@cashfree_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@cashfree_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.cashfree.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.instamojo.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@instamojo_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@instamojo_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.instamojo.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.marcadopago.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@marcadopago_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@marcadopago_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.marcadopago.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.squreup.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-squreup-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@squreup_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@squreup_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.squreup.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.cinetpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-cinetpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@cinetpay_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@cinetpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.cinetpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.paytabs.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-paytabs-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@paytabs_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@paytabs_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.paytabs.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.billplz.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-billplz-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@billplz_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@billplz_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.billplz.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.zitopay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-zitopay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@zitopay_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@zitopay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.zitopay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.toyyibpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-toyyibpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@toyyibpay_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@toyyibpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.toyyibpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.pagalipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-pagalipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@pagalipay_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@pagalipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.pagalipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.authorizenet.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-authorizenet-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@authorizenet_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@authorizenet_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.authorizenet.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.senangpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-senangpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@senangpay_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@senangpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.senangpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.iyzipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-iyzipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@iyzipay_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@iyzipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.iyzipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.awdpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donation-awdpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:donations_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationLogController@awdpay_ipn',
        'controller' => 'App\\Http\\Controllers\\DonationLogController@awdpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.awdpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_single',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_single',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products-category/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products_category',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products-subcategory/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products_subcategory',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products_subcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.subcategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products_cart',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products_cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products-wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@products_wishlist',
        'controller' => 'App\\Http\\Controllers\\FrontendController@products_wishlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.wishlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.cart.ajax.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-cart/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductCartController@remove_cart_item',
        'controller' => 'App\\Http\\Controllers\\ProductCartController@remove_cart_item',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.cart.ajax.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.wishlist.ajax.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-wishlist/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductCartController@remove_wishlist_item',
        'controller' => 'App\\Http\\Controllers\\ProductCartController@remove_wishlist_item',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.wishlist.ajax.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.cart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-item/add-to-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductCartController@add_to_cart',
        'controller' => 'App\\Http\\Controllers\\ProductCartController@add_to_cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.add.to.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.cart.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-item/ajax/add-to-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductCartController@ajax_add_to_cart',
        'controller' => 'App\\Http\\Controllers\\ProductCartController@ajax_add_to_cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.add.to.cart.ajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.add.to.wishlist.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-item/ajax/add-to-wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductCartController@ajax_add_to_wishlist',
        'controller' => 'App\\Http\\Controllers\\ProductCartController@ajax_add_to_wishlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.add.to.wishlist.ajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.coupon.code' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-item/ajax/coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductCartController@ajax_coupon_code',
        'controller' => 'App\\Http\\Controllers\\ProductCartController@ajax_coupon_code',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.coupon.code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.shipping.apply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-item/ajax/shipping',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductCartController@ajax_shipping_apply',
        'controller' => 'App\\Http\\Controllers\\ProductCartController@ajax_shipping_apply',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.shipping.apply',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.ajax.cart.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-item/ajax/cart-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductCartController@ajax_cart_update',
        'controller' => 'App\\Http\\Controllers\\ProductCartController@ajax_cart_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.ajax.cart.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.products.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products-checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_checkout',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.products.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vQAcR0Qlru6fVHdU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@product_checkout',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@product_checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vQAcR0Qlru6fVHdU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.ratings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-ratings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_ratings',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_ratings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.ratings.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products-success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_payment_success',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_payment_success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.payment.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products-cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_payment_cancel',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_payment_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.payment.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.download' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-download/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@product_download',
        'controller' => 'App\\Http\\Controllers\\FrontendController@product_download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.coupon.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-remove-coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductCartController@product_coupon_remove',
        'controller' => 'App\\Http\\Controllers\\ProductCartController@product_coupon_remove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.coupon.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.paypal.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@paypal_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@paypal_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.paypal.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.paytm.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@paytm_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@paytm_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.paytm.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.stripe.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-stripe-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@stripe_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@stripe_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.stripe.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.razorpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@razorpay_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@razorpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.razorpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.mollie.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-mollie-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@mollie_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@mollie_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.mollie.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.flutterwave.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-flutterwave-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@flutterwave_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@flutterwave_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.flutterwave.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.midtrans.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@midtrans_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@midtrans_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.midtrans.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.payfast.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@payfast_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@payfast_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.payfast.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.cashfree.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@cashfree_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@cashfree_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.cashfree.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.instamojo.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@instamojo_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@instamojo_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.instamojo.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.marcadopago.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@marcadopago_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@marcadopago_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.marcadopago.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.squreup.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-squreup-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@squreup_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@squreup_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.squreup.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.cinetpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-cinetpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@cinetpay_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@cinetpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.cinetpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.paytabs.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-paytabs-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@paytabs_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@paytabs_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.paytabs.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.billplz.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-billplz-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@billplz_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@billplz_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.billplz.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.zitopay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-zitopay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@zitopay_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@zitopay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.zitopay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.toyyibpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-toyyibpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@toyyibpay_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@toyyibpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.toyyibpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.pagalipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-pagalipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@pagalipay_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@pagalipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.pagalipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.authorizenet.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-authorizenet-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@authorizenet_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@authorizenet_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.authorizenet.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.senangpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-senangpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@senangpay_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@senangpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.senangpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.iyzipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product-iyzipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@iyzipay_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@iyzipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.iyzipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.awdpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-awdpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@awdpay_ipn',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@awdpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.awdpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.paystack.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paystack-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:product_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductOrderController@paystack_pay',
        'controller' => 'App\\Http\\Controllers\\ProductOrderController@paystack_pay',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.paystack.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.events' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@events',
        'controller' => 'App\\Http\\Controllers\\FrontendController@events',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.events',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.events.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@events_single',
        'controller' => 'App\\Http\\Controllers\\FrontendController@events_single',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.events.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.events.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events-category/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@events_category',
        'controller' => 'App\\Http\\Controllers\\FrontendController@events_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.events.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.events.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@events_search',
        'controller' => 'App\\Http\\Controllers\\FrontendController@events_search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.events.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events-booking/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@event_booking',
        'controller' => 'App\\Http\\Controllers\\FrontendController@event_booking',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.booking.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@store_event_booking_data',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@store_event_booking_data',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.booking.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.paypal.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@paypal_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@paypal_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.paypal.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.paytm.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@paytm_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@paytm_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.paytm.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.stripe.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-stripe-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@stripe_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@stripe_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.stripe.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.razorpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@razorpay_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@razorpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.razorpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.mollie.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-mollie-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@mollie_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@mollie_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.mollie.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.flutterwave.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-flutterwave-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@flutterwave_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@flutterwave_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.flutterwave.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.midtrans.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@midtrans_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@midtrans_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.midtrans.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.payfast.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@payfast_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@payfast_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.payfast.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.cashfree.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@cashfree_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@cashfree_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.cashfree.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.instamojo.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@instamojo_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@instamojo_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.instamojo.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.marcadopago.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@marcadopago_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@marcadopago_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.marcadopago.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.squreup.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-squreup-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@squreup_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@squreup_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.squreup.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.cinetpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-cinetpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@cinetpay_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@cinetpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.cinetpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.paytabs.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-paytabs-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@paytabs_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@paytabs_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.paytabs.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.billplz.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-billplz-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@billplz_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@billplz_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.billplz.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.zitopay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-zitopay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@zitopay_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@zitopay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.zitopay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.toyyibpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-toyyibpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@toyyibpay_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@toyyibpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.toyyibpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.pagalipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-pagalipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@pagalipay_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@pagalipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.pagalipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.authorizenet.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-authorizenet-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@authorizenet_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@authorizenet_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.authorizenet.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.senangpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-senangpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@senangpay_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@senangpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.senangpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.iyzipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-iyzipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@iyzipay_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@iyzipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.iyzipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.awdpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'event-awdpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@awdpay_ipn',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@awdpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.awdpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.booking.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'booking-confirm/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@booking_confirm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@booking_confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.booking.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.payment.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'booking-confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\EventPaymentLogsController@booking_payment_form',
        'controller' => 'App\\Http\\Controllers\\EventPaymentLogsController@booking_payment_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.payment.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attendance-success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@event_payment_success',
        'controller' => 'App\\Http\\Controllers\\FrontendController@event_payment_success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.payment.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attendance-cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:events_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@event_payment_cancel',
        'controller' => 'App\\Http\\Controllers\\FrontendController@event_payment_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.payment.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.jobs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'career',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@jobs',
        'controller' => 'App\\Http\\Controllers\\FrontendController@jobs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.jobs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.jobs.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'career/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@jobs_single',
        'controller' => 'App\\Http\\Controllers\\FrontendController@jobs_single',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.jobs.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.jobs.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'career-category/{id}/{any}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@jobs_category',
        'controller' => 'App\\Http\\Controllers\\FrontendController@jobs_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.jobs.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.jobs.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'career-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@jobs_search',
        'controller' => 'App\\Http\\Controllers\\FrontendController@jobs_search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.jobs.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.jobs.apply' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'apply/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@jobs_apply',
        'controller' => 'App\\Http\\Controllers\\FrontendController@jobs_apply',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.jobs.apply',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.jobs.apply.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'apply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@store_jobs_applicant_data',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@store_jobs_applicant_data',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.jobs.apply.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.paytm.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@paytm_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@paytm_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.paytm.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.stripe.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-stripe-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@stripe_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@stripe_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.stripe.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.razorpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@razorpay_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@razorpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.razorpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.mollie.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-mollie-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@mollie_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@mollie_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.mollie.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.flutterwave.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-flutterwave-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@flutterwave_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@flutterwave_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.flutterwave.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.midtrans.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@midtrans_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@midtrans_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.midtrans.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.payfast.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@payfast_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@payfast_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.payfast.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.cashfree.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@cashfree_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@cashfree_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.cashfree.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.instamojo.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@instamojo_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@instamojo_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.instamojo.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.marcadopago.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@marcadopago_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@marcadopago_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.marcadopago.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.squreup.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-squreup-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@squreup_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@squreup_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.squreup.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.cinetpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-cinetpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@cinetpay_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@cinetpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.cinetpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.paytabs.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-paytabs-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@paytabs_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@paytabs_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.paytabs.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.billplz.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-billplz-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@billplz_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@billplz_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.billplz.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.zitopay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-zitopay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@zitopay_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@zitopay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.zitopay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.toyyibpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-toyyibpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@toyyibpay_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@toyyibpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.toyyibpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.pagalipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-pagalipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@pagalipay_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@pagalipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.pagalipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.authorizenet.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-authorizenet-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@authorizenet_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@authorizenet_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.authorizenet.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.senangpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-senangpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@senangpay_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@senangpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.senangpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.iyzipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'job-iyzipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@iyzipay_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@iyzipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.iyzipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.awdpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-awdpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\JobPaymentController@awdpay_ipn',
        'controller' => 'App\\Http\\Controllers\\JobPaymentController@awdpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.awdpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@job_payment_success',
        'controller' => 'App\\Http\\Controllers\\FrontendController@job_payment_success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.payment.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.job.payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'job-cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'moduleCheck:job_module_status',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@job_payment_cancel',
        'controller' => 'App\\Http\\Controllers\\FrontendController@job_payment_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.job.payment.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'homepage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\FrontendController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'homepage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.get.touch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'get-touch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@get_touch',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@get_touch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.get.touch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.appointment.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'appointment-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@appointment_message',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@appointment_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.appointment.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.service.quote' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'service-quote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@service_quote',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@service_quote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.service.quote',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.case.study.quote' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'case-study-quote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@case_study_quote',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@case_study_quote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.case.study.quote',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscriber.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscriber/email-verify/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@subscriber_verify',
        'controller' => 'App\\Http\\Controllers\\FrontendController@subscriber_verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscriber.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.order.payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order-success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@order_payment_success',
        'controller' => 'App\\Http\\Controllers\\FrontendController@order_payment_success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.order.payment.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.order.payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order-cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@order_payment_cancel',
        'controller' => 'App\\Http\\Controllers\\FrontendController@order_payment_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.order.payment.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.order.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order-confirm/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@order_confirm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@order_confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.order.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.order.payment.form' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'order-confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@order_payment_form',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@order_payment_form',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.order.payment.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.paypal.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-paypal-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@paypal_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@paypal_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.paypal.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.paytm.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-paytm-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@paytm_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@paytm_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.paytm.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.stripe.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-stripe-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@stripe_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@stripe_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.stripe.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.razorpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-razorpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@razorpay_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@razorpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.razorpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.mollie.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-mollie-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@mollie_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@mollie_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.mollie.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.flutterwave.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-flutterwave-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@flutterwave_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@flutterwave_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.flutterwave.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.midtrans.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-midtrans-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@midtrans_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@midtrans_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.midtrans.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.payfast.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-payfast-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@payfast_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@payfast_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.payfast.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.paystack.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paystack-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@paystack_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@paystack_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.paystack.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.cashfree.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-cashfree-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@cashfree_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@cashfree_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.cashfree.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.instamojo.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-instamojo-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@instamojo_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@instamojo_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.instamojo.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.marcadopago.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-marcadopago-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@marcadopago_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@marcadopago_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.marcadopago.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.squreup.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-squreup-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@squreup_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@squreup_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.squreup.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.cinetpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-cinetpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@cinetpay_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@cinetpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.cinetpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.paytabs.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-paytabs-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@paytabs_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@paytabs_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.paytabs.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.billplz.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-billplz-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@billplz_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@billplz_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.billplz.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.zitopay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-zitopay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@zitopay_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@zitopay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.zitopay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.toyyibpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-toyyibpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@toyyibpay_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@toyyibpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.toyyibpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.pagalipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-pagalipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@pagalipay_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@pagalipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.pagalipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.authorizenet.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-authorizenet-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@authorizenet_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@authorizenet_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.authorizenet.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.senangpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-senangpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@senangpay_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@senangpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.senangpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.iyzipay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'price-plan-iyzipay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@iyzipay_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@iyzipay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.iyzipay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan.awdpay.ipn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan-awdpay-ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\PaymentLogController@awdpay_ipn',
        'controller' => 'App\\Http\\Controllers\\PaymentLogController@awdpay_ipn',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan.awdpay.ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.product.invoice.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products-user/generate-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@generate_invoice',
        'controller' => 'App\\Http\\Controllers\\FrontendController@generate_invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.product.invoice.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donation.invoice.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donation-user/generate-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@generate_donation_invoice',
        'controller' => 'App\\Http\\Controllers\\FrontendController@generate_donation_invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donation.invoice.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.event.invoice.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'event-user/generate-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@generate_event_invoice',
        'controller' => 'App\\Http\\Controllers\\FrontendController@generate_event_invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.event.invoice.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.package.invoice.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'package-user/generate-invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@generate_package_invoice',
        'controller' => 'App\\Http\\Controllers\\FrontendController@generate_package_invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.package.invoice.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@service_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@service_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.services.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/category/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@category_wise_services_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@category_wise_services_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.services.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.services.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@services_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@services_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.services.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.donor.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donor-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@donor_list',
        'controller' => 'App\\Http\\Controllers\\FrontendController@donor_list',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.donor.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@about_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@about_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@faq_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@faq_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@team_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@team_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.team',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.price.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@price_plan_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@price_plan_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.price.plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@contact_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@contact_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.request.quote' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@request_quote',
        'controller' => 'App\\Http\\Controllers\\FrontendController@request_quote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.request.quote',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.work' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'case-study',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@work_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@work_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.work',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.work.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'case-study/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@work_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@work_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.work.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.works.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'case-study/category/{id}/{any?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@category_wise_works_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@category_wise_works_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.works.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_search_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_search_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-category/{id}/{any}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@category_wise_blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@category_wise_blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.tags.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-tags/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@tags_wise_blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@tags_wise_blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.tags.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.testimonials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@testimonials',
        'controller' => 'App\\Http\\Controllers\\FrontendController@testimonials',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.testimonials',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.feedback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@feedback_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@feedback_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.feedback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.clients.feedback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clients-feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@clients_feedback_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@clients_feedback_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.clients.feedback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.clients.feedback.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'clients-feedback/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@clients_feedback_store',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@clients_feedback_store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.clients.feedback.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.image.gallery' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'image-gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@image_gallery_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@image_gallery_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.image.gallery',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.plan.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price-plan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@plan_order',
        'controller' => 'App\\Http\\Controllers\\FrontendController@plan_order',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.plan.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.video.gallery' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'video-gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@video_gallery_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@video_gallery_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.video.gallery',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.ajax.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@ajax_login',
        'controller' => 'App\\Http\\Controllers\\FrontendController@ajax_login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.ajax.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g0rzhCLGqceNwAqP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::g0rzhCLGqceNwAqP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YVDmFGzMovHqfelO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YVDmFGzMovHqfelO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.forget.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showUserForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showUserForgetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.forget.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.reset.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/reset-password/{user}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showUserResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showUserResetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.reset.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.reset.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@UserResetPassword',
        'controller' => 'App\\Http\\Controllers\\FrontendController@UserResetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.reset.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u0fAWzrXZ7tB2CRI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@sendUserForgetPasswordMail',
        'controller' => 'App\\Http\\Controllers\\FrontendController@sendUserForgetPasswordMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::u0fAWzrXZ7tB2CRI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.email.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/email-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify_index',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.email.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.resend.verify.mail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/resend-verify-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@reset_user_email_verify_code',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@reset_user_email_verify_code',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.resend.verify.mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D1TTVnugtgqCmh7K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/email-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_email_verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D1TTVnugtgqCmh7K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.quote.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'request-quote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@send_quote_message',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@send_quote_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.quote.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.estimate.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'request-estimate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@send_estimate_message',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@send_estimate_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.estimate.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.homepage.demo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'maintains_mode',
          4 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@home_page_change',
        'controller' => 'App\\Http\\Controllers\\FrontendController@home_page_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.homepage.demo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_index',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.download.file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/download/file/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@download_file',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@download_file',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.download.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.package.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/package-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@package_orders',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@package_orders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.package.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.product.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/product-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@product_orders',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@product_orders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.product.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.product.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/product-download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@product_downloads',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@product_downloads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.product.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.event.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/events-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@event_booking',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@event_booking',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.event.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.donations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/donations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@donations',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@donations',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.donations',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.appointment.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/appointment-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@appointment_booking',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@appointment_booking',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.appointment.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.course.enroll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/course-enroll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@course_enroll',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@course_enroll',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.course.enroll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.support.tickets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/support-tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_tickets',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_tickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.support.tickets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.change.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@change_password',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@change_password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.change.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.home.edit.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/edit-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@edit_profile',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@edit_profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.home.edit.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_profile_update',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_profile_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@user_password_change',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@user_password_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.package.order.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/package-order/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@package_order_cancel',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@package_order_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.package.order.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.product.order.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/product-order/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@product_order_cancel',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@product_order_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.product.order.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.event.order.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/event-order/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@event_order_cancel',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@event_order_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.event.order.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.donation.order.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/donation-order/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@donation_order_cancel',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@donation_order_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.donation.order.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.appointment.order.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/appointment-order/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@appointment_order_cancel',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@appointment_order_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.appointment.order.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.course.order.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/course-order/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@course_order_cancel',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@course_order_cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.course.order.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.product.order.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/product-order/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@product_order_view',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@product_order_view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.product.order.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.course.certificate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/course-certificate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@course_certificate',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@course_certificate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.course.certificate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.course.certificate.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/course-certificate/download/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@course_certificate_download',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@course_certificate_download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.course.certificate.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-home/support-ticket/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_view',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_view',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.priority.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/support-ticket/priority-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_priority_change',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_priority_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.priority.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.status.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/support-ticket/status-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_status_change',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_status_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.status.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.support.ticket.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/support-ticket/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_message',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@support_ticket_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.support.ticket.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard.event.ticket.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-home/event-user/generate-ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userEmailVerify',
          2 => 'setlang:frontend',
          3 => 'globalVariable',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\UserDashboardController@generate_event_ticket',
        'controller' => 'App\\Http\\Controllers\\UserDashboardController@generate_event_ticket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user-home',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard.event.ticket.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forget.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showAdminForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showAdminForgetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.forget.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin/reset-password/{user}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showAdminResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showAdminResetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reset.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@AdminResetPassword',
        'controller' => 'App\\Http\\Controllers\\FrontendController@AdminResetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reset.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::smrixtY2TK4wb239' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@sendAdminForgetPasswordMail',
        'controller' => 'App\\Http\\Controllers\\FrontendController@sendAdminForgetPasswordMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::smrixtY2TK4wb239',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@adminLogout',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@adminLogout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HHf0eh4Q95DTmEmp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HHf0eh4Q95DTmEmp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.langchange' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@lang_change',
        'controller' => 'App\\Http\\Controllers\\FrontendController@lang_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.langchange',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.subscribe.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscribe-newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@subscribe_newsletter',
        'controller' => 'App\\Http\\Controllers\\FrontendController@subscribe_newsletter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.subscribe.newsletter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.contact.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@send_contact_message',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@send_contact_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.contact.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.order.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'place-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendFormController@send_order_message',
        'controller' => 'App\\Http\\Controllers\\FrontendFormController@send_order_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.order.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.dynamic.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang:frontend',
          2 => 'globalVariable',
          3 => 'HtmlMinifier',
          4 => 'maintains_mode',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@dynamic_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@dynamic_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.dynamic.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
