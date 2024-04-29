<div class="container" style="padding-top: 1rem; padding-bottom: 1rem;">
<h5>Pelaporan Siswa Bermasalah</h5>
				<form id="form" action="https://script.google.com/macros/s/AKfycbwnYSCnUBoeJCnMGlcEXtCqXYwLdD8HTrej4lD3jHvzZ59DzPdkYjoHYnsu9AavzNND/exec" method="POST">
					<div class="row">
						<div class="input-field col s6">
							<input id="student_name" name="student_name" type="text" class="validate" required>
							<label for="student_name">Nama Siswa</label>
						</div>
						<div class="input-field col s6">
							<select name="student_grade" id="student_grade">
								<option value="X" selected>10 (Sepuluh)</option>
								<option value="XI">11 (Sebelas)</option>
								<option value="XII">12 (Dua Belas)</option>
							</select>
							<label>Kelas</label>
						</div>
						<div class="input-field col s6">
							<select name="student_major" id="student_major">
							    <option value="DGM">Desain Gambar Mesin (DGM)</option>
							    <option value="DPIB">Desain Pemodelan dan Informasi Bangunan (DPIB)</option>
							    <option value="GEO">Teknik Geomatika (GEO)</option>
							    <option value="TITL">Teknik Instalasi Tenaga Listrik (TITL)</option>
							    <option value="TKP">Teknik Konstruksi dan Perumahan (TKP)</option>
							    <option value="TMI">Teknik Mekanik Industri (TMI)</option>
							    <option value="TOI">Teknik Otomasi Industri (TOI)</option>
							    <option value="TPG">Teknik Perawatan Gedung (TPG)</option>
							    <option value="MESIN">Teknik Permesinan (MESIN)</option>
								<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
							</select>
							<label>Jurusan</label>
						</div>
						<div class="input-field col s6">
							<input id="student_sub_grade" name="student_sub_grade" type="text" class="validate" required>
							<label for="student_sub_grade">Sub Kelas</label>
						</div>
						<div class="input-field col s6">
							<input type="text" id="datePicker" name="datePicker" class="datepicker" required>
							<label>Hari/Tanggal</label>
						</div>
						<div class="input-field col s6">
							<button type="button" class="waves-effect waves-light btn modal-trigger blue darken-4 w-100 btn-icon-center" data-target="modalImage">
							<span class="material-symbols-outlined">folder_open</span>PILIH GAMBAR
							</button>
							<input type="hidden" id="image_documentation" name="image_documentation">
						</div>
						<div class="input-field col s6">
							<select name="problem" id="problem">
								<option value="Terlambat" selected>Terlambat</option>
								<option value="Merokok">Merokok</option>
								<option value="Tawuran">Tawuran</option>
								<option value="Lainnya">Lainnya</option>
							</select>
							<label>Jenis Masalah</label>
						</div>
						<div class="input-field col s6">
							<input id="student_teacher" name="student_teacher" type="text" class="validate" required>
							<label for="student_teacher">Nama Wali Kelas</label>
						</div>
						<div class="input-field col s12">
							<textarea id="description" name="description" class="materialize-textarea" required></textarea>
							<label for="description">Keterangan</label>
						</div>
						<div class="col s12">
							<button type="submit" class="waves-effect waves-light btn blue darken-4 btn-icon-start">
							<span class="material-symbols-outlined">save</span>SIMPAN DATA
							</button>
						</div>
					</div>
				</form>
			</div>
			
		<div id="modalImage" class="modal">
			<div class="modal-content" style="text-align: center;">
				<h5 class="modal-title">Pilih Gambar</h5>
				<div class="">
				    <button type="button" class="modal-trigger waves-effect waves-light btn blue m-btn-1 darken-4 btn-icon-center w-100 modal-close" data-target="modalUpload">
				<span class="material-symbols-outlined">upload_file</span>UNGGAH GAMBAR
				</button>
				<button type="button" class="modal-trigger waves-effect waves-light btn blue m-btn-2 darken-4 btn-icon-center w-100 modal-close" data-target="modalCapture" onclick="captureModal()">
				<span class="material-symbols-outlined">camera</span>AMBIL GAMBAR
				</button>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-close waves-effect waves-light btn-flat text-blue darken-4">TUTUP</a>
			</div>
		</div>
		<div id="modalUpload" class="modal">
			<div class="modal-content" style="text-align: center;">
				<h5 class="modal-title">Unggah Gambar</h5>
				<div class="file-field input-field">
					<div class="btn blue darken-4 waves-effect waves-light">
						<span>PILIH GAMBAR</span>
						<input type="file" id="imageFile">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-close waves-effect waves-light btn blue darken-4">Simpan</a>
			</div>
		</div>
		<div id="modalCapture" class="modal">
			<div class="modal-content" id="mdContentCapture">
				<h5 class="modal-title">Ambil Gambar</h5>
				<video autoplay="true" id="video"></video>
				<canvas id="canvas" style="display: none; max-width: 100vw;"></canvas>
				<div class="w-100 center">
				    <div style="display: inline-flex;">
				    <button type="button" class="waves-effect waves-light btn blue darken-4 m-auto mx-2" onclick="capture()" id="btnCapture" style="display: block;">Ambil Gambar</button>
				<button type="button" class="waves-effect waves-light btn blue darken-4 m-auto mx-2" id="btnResetCapture" style="display: none;">Ulang Ambil Gambar</button>
				<button type="button" class="waves-effect waves-light btn blue darken-4 m-auto mx-2 btn-icon-center-center" onclick="switchCam()" id="btnSwitchCam" style="display: block;">
				    <span class="material-symbols-outlined">cameraswitch</span>
				</button>
				</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-close waves-effect waves-light btn blue darken-4">Simpan</a>
			</div>
		</div>
		
		<script>
		    var resultb64 = "";
            
            var btnCapture = document.getElementById("btnCapture");
            var btnResetCapture = document.getElementById("btnResetCapture");
            var btnSwitchCam = document.getElementById('btnSwitchCam');
            
			function captureModal() {
            	var video = document.querySelector("#video");
            
            	if (navigator.mediaDevices.getUserMedia) {
            		navigator.mediaDevices.getUserMedia({
            				video: {
            					facingMode: {
            						exact: "environment"
            					}
            				}
            			})
            			.then(function (stream) {
            				video.srcObject = stream;
            			})
            			.catch(function () {
            				navigator.mediaDevices.getUserMedia({
            						video: {
            							facingMode: "user" // Gunakan kamera depan
            						}
            					})
            					.then(function (stream) {
            						video.srcObject = stream;
            					})
            					.catch(function (error) {
            						console.log("Both front and back cameras are not available.");
            					});
            			});
            	} else {
            		console.log("getUserMedia is not supported on your browser");
            	}
            
            }
            
            function capture() {
            	var canvas = document.getElementById('canvas');
            	var video = document.getElementById('video');
            	var videoQuery = document.querySelector("#video");
            
            	var videoWidth = video.videoWidth;
            	var videoHeight = video.videoHeight;
            
            	var canvasSize = Math.min(videoWidth, videoHeight);
            	canvas.width = canvasSize;
            	canvas.height = canvasSize;
            
            	var offsetX = (videoWidth - canvasSize) / 2;
            	var offsetY = (videoHeight - canvasSize) / 2;
            
            	canvas.getContext('2d').drawImage(video, offsetX, offsetY, canvasSize, canvasSize, 0, 0, canvas.width, canvas.height);
            
            	resultb64 = canvas.toDataURL();
            
            	document.getElementById("image_documentation").value = resultb64.split(',')[1];
            	video.style.display = "none";
            	canvas.style.display = "block";
            	btnCapture.style.display = "none";
            	btnSwitchCam.style.display = "none";
            	btnResetCapture.style.display = "block";
            	if (navigator.mediaDevices.getUserMedia) {
            		navigator.mediaDevices.getUserMedia({
            				video: false
            			})
            			.then(function (stream) {
            				videoQuery.srcObject = stream;
            			})
            			.catch(function (error) {
            				console.log("Something went wrong!");
            			});
            	}
            }
            
            function switchCam() {
                if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
                    console.log("getUserMedia is not supported on your browser");
                    return;
                }
            
                // Get the current facingMode
                var currentFacingMode = '';
                if (video.srcObject) {
                    var tracks = video.srcObject.getVideoTracks();
                    if (tracks.length > 0) {
                        var facingMode = tracks[0].getSettings().facingMode;
                        if (facingMode) {
                            currentFacingMode = facingMode;
                        }
                    }
                }
            
                // Stop the current stream
                var stream = video.srcObject;
                var tracks = stream.getTracks();
                tracks.forEach(function(track) {
                    track.stop();
                });
            
                // Switch to the opposite camera
                var newFacingMode = (currentFacingMode === 'user') ? 'environment' : 'user';
            
                navigator.mediaDevices.getUserMedia({
                    video: {
                        facingMode: newFacingMode
                    }
                })
                .then(function (stream) {
                    video.srcObject = stream;
                })
                .catch(function (error) {
                    console.log("Failed to switch camera: ", error);
                });
            }

            
            
            document.getElementById("btnResetCapture").addEventListener("click", function () {
            	document.getElementById("image_documentation").value = "";
            	video.style.display = "block";
            	canvas.style.display = "none";
            	btnSwitchCam.style.display = "block";
            	btnCapture.style.display = "block";
            	btnResetCapture.style.display = "none";
            	if (navigator.mediaDevices.getUserMedia) {
            		navigator.mediaDevices.getUserMedia({
            				video: true
            			})
            			.then(function (stream) {
            				video.srcObject = stream;
            			})
            			.catch(function (error) {
            				console.log("Something went wrong!");
            			});
            	}
            });
            
            document.getElementById('imageFile').addEventListener('change', function (event) {
            	var file = event.target.files[0];
            	var reader = new FileReader();
            	reader.onloadend = function () {
            		document.getElementById('image_documentation').value = reader.result.split(',')[1];
            	}
            	reader.readAsDataURL(file);
            });
            
const currentDate = new Date();

const day = currentDate.getDay();
const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
const dayName = days[day];

let date = currentDate.getDate();
date = (date < 10) ? `0${date}` : date;

const month = currentDate.getMonth();
const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
const monthName = months[month];

const year = currentDate.getFullYear();

const datePicker = document.getElementById('datePicker');
datePicker.value = `${dayName}, ${date} ${monthName} ${year}`;
		</script>
