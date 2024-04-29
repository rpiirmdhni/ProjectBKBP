<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OK GAS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
		<style>
			html, body {
			font-family: 'Plus Jakarta Sans', sans-serif;
			min-height: 100vh;
			}
			input:not([type]):focus:not([readonly]),input[type=text]:not(.browser-default):focus:not([readonly]),input[type=password]:not(.browser-default):focus:not([readonly]),input[type=email]:not(.browser-default):focus:not([readonly]),input[type=url]:not(.browser-default):focus:not([readonly]),input[type=time]:not(.browser-default):focus:not([readonly]),input[type=date]:not(.browser-default):focus:not([readonly]),input[type=datetime]:not(.browser-default):focus:not([readonly]),input[type=datetime-local]:not(.browser-default):focus:not([readonly]),input[type=tel]:not(.browser-default):focus:not([readonly]),input[type=number]:not(.browser-default):focus:not([readonly]),input[type=search]:not(.browser-default):focus:not([readonly]),textarea.materialize-textarea:focus:not([readonly]) {
			border-bottom: 1px solid #0d47a1;
			-webkit-box-shadow: 0 1px 0 0 #0d47a1;
			box-shadow: 0 1px 0 0 #0d47a1;
			}
			input:not([type]):focus:not([readonly])+label,input[type=text]:not(.browser-default):focus:not([readonly])+label,input[type=password]:not(.browser-default):focus:not([readonly])+label,input[type=email]:not(.browser-default):focus:not([readonly])+label,input[type=url]:not(.browser-default):focus:not([readonly])+label,input[type=time]:not(.browser-default):focus:not([readonly])+label,input[type=date]:not(.browser-default):focus:not([readonly])+label,input[type=datetime]:not(.browser-default):focus:not([readonly])+label,input[type=datetime-local]:not(.browser-default):focus:not([readonly])+label,input[type=tel]:not(.browser-default):focus:not([readonly])+label,input[type=number]:not(.browser-default):focus:not([readonly])+label,input[type=search]:not(.browser-default):focus:not([readonly])+label,textarea.materialize-textarea:focus:not([readonly])+label {
			color: #0d47a1;
			}
			button {
			height: 3rem !important;
			line-height: 3rem !important;
			}
			.dropdown-content li>a, .dropdown-content li>span {
			color: #0d47a1;
			}
			.select-wrapper input.select-dropdown:focus {
			border-bottom: 1px solid #0d47a1;
			}
			.datepicker-date-display {
			background-color: #0d47a1;
			}
			.datepicker-table td.is-selected {
			background-color: #0d47a1;
			}
			.datepicker-cancel, .datepicker-clear, .datepicker-today, .datepicker-done {
			color: #0d47a1;
			}
			.datepicker-table td.is-today {
			color: #0d47a1;
			}
			.datepicker-table td.is-selected {
			color: #ffffff;
			}
			.datepicker-day-button:focus {
			background-color: rgba(13, 71, 161, 0.25);
			}
			.d-none {
			display: none;
			}
			.fade {
			opacity: 0;
			transition: opacity 0.5s ease-in-out;
			}
			.show {
			opacity: 1;
			transition: opacity 0.5s ease-in-out;
			}
			.container-nav {
			display: flex;
			justify-content: space-between;
			align-items: center;
			}
			.material-symbols-outlined {
			line-height: inherit;
			}
			.menu {
			display: flex !important;
			justify-content: start;
			align-items: center;
			}
			.menu > .material-symbols-outlined {
			margin-right: 0.5rem;
			}
			.btn-icon-start {
			display: flex !important;
			justify-content: start !important;
			align-items: center !important;
			}
			.btn-icon-start > .material-symbols-outlined {
			margin-right: 0.5rem;
			}
			.btn-icon-center {
			display: flex !important;
			justify-content: center !important;
			align-items: center !important;
			}
			.btn-icon-center > .material-symbols-outlined {
			margin-right: 0.5rem;
			}
			.btn-icon-center-center > .material-symbols-outlined {
			margin-right: 0rem;
			}
			.btn-icon-end {
			display: flex !important;
			justify-content: end !important;
			align-items: center !important;
			}
			.btn-icon-end > .material-symbols-outlined {
			margin-right: 0.5rem;
			}
			.w-100 {
			width: 100%;
			}
			.w-50 {
			width: 50%;
			}
			#video, #canvas {
			display: block;
			height: 50vh !important;
			max-height: 50vh !important;
			margin: auto !important;
			margin-bottom: 1.5rem !important;
			margin-top: 1.5rem !important;
			}
			#modalCapture {
			width: 100% !important;
			height: 100% !important;
			max-height: 100vh !important;
			top: 0 !important;
			}
			#mdContentCapture {
			min-height: 93.5vh !important;
			}
			.modal-title {
			margin: 0 !important;
			margin-bottom: 1.5rem !important;
			}
			.m-auto {
			margin: auto !important;
			}
			.d-block {
			display: block !important;
			}
			.btn, .btn-flat {
			margin-top: 0.5rem;
			margin-bottom: 0.5rem;
			}
			.m-btn-1 {
			margin: 0rem 0 0.8rem 0;
			}
			.m-btn-1 {
			margin: 0.8rem 0 0rem 0;
			}
			.mx-2 {
			margin-left: 0.5rem !important;
			margin-right: 0.5rem !important;
			}
		</style>
	</head>
	<body>
		<div class="blue darken-4" id="preloader" style="min-height: 100vh; max-height: 100vh; width: 100%; position: absolute; display: flex; justify-content: center; align-items: center;">
			<div class="container">
				<div class="progress">
					<div class="indeterminate"></div>
				</div>
			</div>
		</div>
		<div id="app" class="d-none">
			<nav>
				<div class="nav-wrapper blue darken-4">
					<div class="container container-nav">
						<a href="#" data-target="slide-out" class="sidenav-trigger waves-effect waves-light">
						<span class="material-symbols-outlined">menu</span>
						</a>
						<img src="./assets/img/logo-header-smk.png" height="50">
						<ul id="nav-mobile" class="right hide-on-med-and-down">
							<li><a href="./">Beranda</a></li>
							<li><a href="./?page=lapor-siswa">Pelaporan Siswa</a></li>
							<li><a href="./?page=tamu-sekolah">Tamu Sekolah</a></li>
							<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Daftar Data&nbsp;<span class="material-symbols-outlined right">expand_more</span></a></li>
						</ul>
						<ul id="dropdown1" class="dropdown-content">
                            <li><a href="https://docs.google.com/spreadsheets/d/1EZzxGoWDQDjbHB7vn8ulwzN4olXSFw82e2SM9AzE3L4/edit#gid=0" target="_blank">Data Pelaporan Siswa</a></li>
							<li><a href="https://docs.google.com/spreadsheets/d/1EZzxGoWDQDjbHB7vn8ulwzN4olXSFw82e2SM9AzE3L4/edit#gid=0" target="_blank">Data Tamu Sekolah</a></li>
                        </ul>
					</div>
				</div>
			</nav>
			<ul id="slide-out" class="sidenav">
				<li>
					<div class="user-view">
						<div class="background blue darken-4">
						</div>
						<span class="white-text name">Selamat Datang</span>
						<span class="white-text email"></span>
					</div>
				</li>
				<li><a href="./" class="waves-effect menu"><span class="material-symbols-outlined">home</span>Beranda</a></li>
				<li><a href="./?page=lapor-siswa" class="waves-effect menu"><span class="material-symbols-outlined">person_alert</span>Pelaporan Siswa</a></li>
				<li><a href="./?page=tamu-sekolah" class="waves-effect menu"><span class="material-symbols-outlined">contacts</span>Tamu Sekolah</a></li>
				<li><a class="waves-effect menu dropdown-trigger" href="#!" data-target="dropdown2"><span class="material-symbols-outlined right">expand_more</span>Daftar Data</a></li>
				<ul id="dropdown2" class="dropdown-content">
                    <li><a href="https://docs.google.com/spreadsheets/d/1EZzxGoWDQDjbHB7vn8ulwzN4olXSFw82e2SM9AzE3L4/edit#gid=0" target="_blank">Data Pelaporan Siswa</a></li>
					<li><a href="https://docs.google.com/spreadsheets/d/1EZzxGoWDQDjbHB7vn8ulwzN4olXSFw82e2SM9AzE3L4/edit#gid=0" target="_blank">Data Tamu Sekolah</a></li>
                </ul>
			</ul>
			
			<?php
			    if(empty($_GET['page']) || $_GET['page'] == "") {
			        
			    } else if($_GET['page'] == "lapor-siswa"){
			        include './pages/pelaporan_siswa.php';
			    } else if($_GET['page'] == "tamu-sekolah"){
			        include './pages/penerimaan_tamu.php';
			    } else {
			        
			    }
			?>
			
			</div>
			    
				
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script>
            document.addEventListener('DOMContentLoaded', function () {
                
                var optionDates = {
          // Opsi tambahan untuk datepicker
          autoClose: true, // Otomatis menutup datepicker setelah memilih tanggal
          format: 'dddd, dd mmmm yyyy', // Format tanggal yang ditampilkan
          i18n: {
            months: [
              'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
              'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ],
            weekdaysAbbrev: ['Ming', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
            weekdaysShort: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
            weekdays: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
            cancel: 'Batal',
            clear: 'Hapus',
            done: 'Pilih'
          }
        };
                
            	var sidenav = document.querySelectorAll('.sidenav');
            	var sidenavInstances = M.Sidenav.init(sidenav);
            	var datepicker = document.querySelectorAll('.datepicker');
            	var instances = M.Datepicker.init(datepicker, optionDates);
            	var elem = document.querySelectorAll('select');
            	var instance = M.FormSelect.init(elem);
            	var modal = document.querySelectorAll('.modal');
            	var modalInstances = M.Modal.init(modal);
            	var dropdownTrigger = document.querySelectorAll('.dropdown-trigger');
                var dropdownInstances = M.Dropdown.init(dropdownTrigger);
            
            	setTimeout(function () {
            		var preloader = document.getElementById('preloader');
            		var app = document.getElementById('app');
            
            		preloader.classList.add('fade');
            
            		setTimeout(function () {
            			preloader.classList.add('d-none');
            		}, 500);
            
            		setTimeout(function () {
            			app.classList.remove('d-none');
            		}, 300)
            
            		setTimeout(function () {
            			app.classList.add('show');
            		}, 300);
            	}, 1000);
            });
		</script>
	</body>
</html>
