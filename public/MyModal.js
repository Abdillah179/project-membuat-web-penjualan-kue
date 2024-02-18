document.addEventListener("DOMContentLoaded", function () {
	// Ambil status modal pertama dari penyimpanan lokal
	const modal1Status = localStorage.getItem("modal1Status");

	// Jika status modal pertama adalah "buka", buka modal pertama saat halaman dimuat
	if (modal1Status === "buka") {
		const myModal1 = new bootstrap.Modal(
			document.getElementById("exampleModal")
		);
		myModal1.show();
	}

	// Ambil status modal kedua dari penyimpanan lokal
	const modal2Status = localStorage.getItem("modal2Status");

	// Jika status modal kedua adalah "buka", buka modal kedua saat halaman dimuat
	if (modal2Status === "buka") {
		const myModal2 = new bootstrap.Modal(
			document.getElementById("exampleModalRegister")
		);
		myModal2.show();
	}

	// Simpan status modal saat modal ditutup atau dibuka
	const myModal1 = document.getElementById("exampleModal");
	myModal1.addEventListener("show.bs.modal", function () {
		localStorage.setItem("modal1Status", "buka");
	});
	myModal1.addEventListener("hide.bs.modal", function () {
		localStorage.setItem("modal1Status", "tutup");
	});

	const myModal2 = document.getElementById("exampleModalRegister");
	myModal2.addEventListener("show.bs.modal", function () {
		localStorage.setItem("modal2Status", "buka");
	});
	myModal2.addEventListener("hide.bs.modal", function () {
		localStorage.setItem("modal2Status", "tutup");
	});
});
