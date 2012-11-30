'use strict';

/* App Module */

/***************** Start PhoneCat ********************/
angular.module(
		'phonecat', 
		['phonecatFilters', 'phonecatServices']	
	)
	.config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/phones', {templateUrl: 'angular/phone-list.html',   controller: PhoneListCtrl}).
      when('/phones/:phoneId', {templateUrl: 'angular/phone-detail.html', controller: PhoneDetailCtrl}).
      otherwise({redirectTo: '/phones'});
}]);	
/***************** End PhoneCat ********************/

/***************** Start NetMag ********************/
	/* Declare app level module */
var contactManager = angular.module(
      'contactManager', 
      []
    )
  .config(function($routeProvider) {
    $routeProvider.when('/index', {
      templateUrl: 'angular/netmag/index.html'
    })
    .when('/info/:id', {
      templateUrl: 'angular/netmag/info.html',
      controller: 'InfoCtrl'
    })
    .when('/add', {
      templateUrl: 'angular/netmag/add.html',
      controller: 'AddCtrl'
    })
    .when('/edit/:id', {
      templateUrl: 'angular/netmag/edit.html',
      controller: 'EditCtrl'
    })
    .when('/remove/:id', {
      templateUrl: 'angular/netmag/remove.html',
      controller: 'RemoveCtrl'
    })
    .otherwise({
      redirectTo: '/index'
    });
  });
/***************** End NetMag ********************/