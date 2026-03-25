var app = angular.module("Admin_Menu_App", []);

var adminMenuCtrlr = function($scope){

    
    const PORT = "8765"
    $scope.url = window.location.origin + ":" + PORT;

}

app.controller("Admin_Menu_Ctrlr", adminMenuCtrlr);