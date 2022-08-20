"use strict";

//notification funciton
var down = false;

$("#bell").click(function (e) {
	var color = $(this).text();
	if (down) {
		$("#box").css("height", "0px");
		$("#box").css("opacity", "0");
		down = false;
	} else {
		$("#box").css("height", "auto");
		$("#box").css("opacity", "1");
		down = true;
	}
});

//tooltip function
$(function () {
	$('[data-toggle="tooltip"]').tooltip();
});

// modal work
// $(".addButton").click(function () {
// 	$("#addModal").modal("show");
// });

function addItem() {
	$("#addModal").modal("show");
}
// $(".editButton").click(function () {
// 	$("#editModal").modal("show");
// });

// $(".deleteButton").click(function () {
// 	$("#deleteModal").modal("show");
// });

// $(".stockButton").click(function () {
// 	$("#stockModal").modal("show");
// });

// $(".soldButton").click(function () {
// 	$("#soldModal").modal("show");
// });

//prevents dropdown close on navigation dropdown
$(".settings-dropdown").on("click", function (event) {
	// event.preventDefault();
	event.stopPropagation();
});

//delete modal

//notification control
function notification(noti) {
	alert("check");
	$(".notificationCenter").html(noti);
}

//timer function
function startTimer(duration, display) {
	var timer = duration,
		minutes,
		seconds;
	setInterval(function () {
		minutes = parseInt(timer / 60, 10);
		seconds = parseInt(timer % 60, 10);

		minutes = minutes < 10 ? "0" + minutes : minutes;
		seconds = seconds < 10 ? "0" + seconds : seconds;

		display.textContent = minutes + ":" + seconds;

		if (--timer < 0) {
			timer = duration;
		}
	}, 1000);
}

const otpCountdown = function () {
	var twoMinutes = 60 * 2,
		display = document.querySelector("#time");
	startTimer(twoMinutes, display);
};

$("#otpBody").hide();
$("#changePasswordBody").hide();

const otp = function () {
	$("#otpBody").show();
	$("#forgotPasswordBody").hide();
	$("#changePasswordBody").hide();
};

const otpCheck = function () {
	$("#otpBody").hide();
	$("#changePasswordBody").show();
	$("#forgotPasswordBody").hide();
};
