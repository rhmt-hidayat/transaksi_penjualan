<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Invoice Penjualan</title>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() . 'assets/invoice/apple-touch-icon.png'; ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() . 'assets/invoice/favicon-32x32.png'; ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() . 'assets/invoice/favicon-16x16.png'; ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() . 'assets/invoice/favicon.ico'; ?>">
	<link rel="manifest" href="<?php echo base_url() . 'assets/invoice/manifest.json'; ?>">
	<meta name="msapplication-TileImage" content="<?php echo base_url() . 'assets/invoice/mstile-150x150.png'; ?>">
	<meta name="theme-color" content="#ffffff">
	<script src="<?php echo base_url() . 'assets/invoice/imagesloaded.pkgd.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/invoice/simplebar.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/invoice/config.js'; ?>"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
	<link href="<?php echo base_url() . 'assets/invoice/simplebar.min.css'; ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link href="<?php echo base_url() . 'assets/invoice/theme-rtl.min.css'; ?>" type="text/css" rel="stylesheet" id="style-rtl">
	<link href="<?php echo base_url() . 'assets/invoice/theme.min.css'; ?>" type="text/css" rel="stylesheet" id="style-default">
	<link href="<?php echo base_url() . 'assets/invoice/user-rtl.min.css'; ?>" type="text/css" rel="stylesheet" id="user-style-rtl">
	<link href="<?php echo base_url() . 'assets/invoice/user.min.css'; ?>" type="text/css" rel="stylesheet" id="user-style-default">
	<script>
		var phoenixIsRTL = window.config.config.phoenixIsRTL;
		if (phoenixIsRTL) {
			var linkDefault = document.getElementById('style-default');
			var userLinkDefault = document.getElementById('user-style-default');
			linkDefault.setAttribute('disabled', true);
			userLinkDefault.setAttribute('disabled', true);
			document.querySelector('html').setAttribute('dir', 'rtl');
		} else {
			var linkRTL = document.getElementById('style-rtl');
			var userLinkRTL = document.getElementById('user-style-rtl');
			linkRTL.setAttribute('disabled', true);
			userLinkRTL.setAttribute('disabled', true);
		}
	</script>
</head>


<body>
	<main class="main" id="top">
		<section class="pt-5 pb-9 bg-white dark__bg-1200 border-top border-300">
			<div class="container-small">
				<nav class="mb-2" aria-label="breadcrumb">
					<ol class="breadcrumb mb-0">
						<li class="breadcrumb-item"><a href="#!">Cetak Invoice</a></li>
						<li class="breadcrumb-item active" aria-current="page">Kode Promo FLR978282</li>
					</ol>
				</nav>
				<div class="d-flex justify-content-between align-items-end mb-4">
					<h2 class="mb-0">Invoice Penjualan</h2>
					<div>
						<button class="print-button btn btn-phoenix-secondary"><span class="fa-solid fa-print me-sm-2"></span><span class="d-none d-sm-inline-block">Print</span></button>
					</div>
				</div>
				<div class="bg-soft dark__bg-1100 p-4 mb-4 rounded-2">
					<div class="row g-4">
						<div class="col-12 col-lg-4">
							<div class="row g-4 g-lg-2">
								<div class="col-12 col-sm-6 col-lg-12">
									<div class="row align-items-center g-0">
										<div class="col-auto col-lg-6 col-xl-5">
											<h6 class="mb-0 me-3">Invoice No :</h6>
										</div>
										<div class="col-auto col-lg-6 col-xl-7">
											<p class="fs--1 text-800 fw-semi-bold mb-0">#FLR978282</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-lg-12">
									<div class="row align-items-center g-0">
										<div class="col-auto col-lg-6 col-xl-5">
											<h6 class="me-3">Invoice Date :</h6>
										</div>
										<div class="col-auto col-lg-6 col-xl-7">
											<p class="fs--1 text-800 fw-semi-bold mb-0">18.01.2025</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="row g-4 gy-lg-5">
								<div class="col-12 col-lg-12">
									<h6 class="mb-2 me-3">PT Victoria Care Indonesia Tbk.</h6>
									<p class="fs--1 text-800 fw-semi-bold mb-0">VICI<br />Puri Indah Financial Tower 10th-11th Floor</p>
									<p class="mb-2">corsec@vci.co.id</p>
									<p class="mb-0">(+6221) 54368111</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="row g-4 gy-lg-5">
								<div class="col-12 col-lg-12">
									<h6 class="mb-2"> Penerima :</h6>
									<div class="fs--1 text-800 fw-semi-bold mb-0">
										<p class="mb-2">Rahmat Hidayat,</p>
										<p class="mb-2">Jalan Swadaya 1 gang muid, Jakarta</p>
										<p class="mb-2">real.rahmathidayat@gmail.com</p>
										<p class="mb-0">+6287783151690</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="px-0">
					<div class="table-responsive scrollbar">
						<table class="table fs--1 text-900 mb-0">
							<thead class="bg-200">
								<tr>
									<th scope="col" style="width: 24px;"></th>
									<th scope="col" style="min-width: 60px;">No.</th>
									<th scope="col" style="min-width: 360px;">Nama Barang</th>
									<th class="ps-5" scope="col" style="min-width: 150px;">Kode Promo</th>
									<th scope="col" style="width: 60px;">Varian</th>
									<th class="text-end" scope="col" style="width: 80px;">Jumlah</th>
									<th class="text-end" scope="col" style="width: 100px;">Harga</th>
									<th class="text-end" scope="col" style="width: 138px;">#</th>
									<th class="text-center" scope="col" style="width: 80px;">#</th>
									<th class="text-end" scope="col" style="min-width: 92px;">#</th>
									<th class="text-end" scope="col" style="min-width: 60px;">Total</th>
									<th scope="col" style="width: 24px;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="border-0"></td>
									<td class="align-middle">1</td>
									<td class="align-middle">
										<p class="line-clamp-1 mb-0 fw-semi-bold">Body Care</p>
									</td>
									<td class="align-middle ps-5">Promo-001</td>
									<td class="align-middle text-700 fw-semi-bold">-</td>
									<td class="align-middle text-end text-1000 fw-semi-bold">2</td>
									<td class="align-middle text-end fw-semi-bold">3000</td>
									<td class="align-middle text-end">-</td>
									<td class="align-middle text-center fw-semi-bold">-</td>
									<td class="align-middle text-end fw-semi-bold">-</td>
									<td class="align-middle text-end fw-semi-bold">6000</td>
									<td class="border-0"></td>
								</tr>
								<tr class="bg-200">
									<td></td>
									<td class="align-middle fw-semi-bold" colspan="9">Subtotal</td>
									<td class="align-middle text-end fw-bold">6000</td>
									<td></td>
								</tr>
								<tr>
									<td class="border-0"></td>
									<td colspan="6"></td>
									<td class="align-middle fw-bold ps-15" colspan="2">Shipping Cost</td>
									<td class="align-middle text-end fw-semi-bold" colspan="2">10000</td>
									<td class="border-0"></td>
								</tr>
								<tr>
									<td></td>
									<td colspan="6"></td>
									<td class="align-middle fw-bold ps-15" colspan="2">Discount/Voucher</td>
									<td class="align-middle text-end fw-semi-bold text-danger" colspan="2">0</td>
									<td></td>
								</tr>
								<tr class="bg-200">
									<td class="align-middle ps-4 fw-bold text-1000" colspan="3">Grand Total</td>
									<td class="align-middle fw-bold text-1000" colspan="7">Empat Ribu Rupiah</td>
									<td class="align-middle text-end fw-bold">4000</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div><!-- end of .container-->
		</section>
	</main>

	<script src="<?php echo base_url() . 'assets/invoice/popper.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/invoice/bootstrap.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/invoice/anchor.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/invoice/is.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/invoice/all.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/invoice/lodash.min.js'; ?>"></script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
	<script src="<?php echo base_url() . 'assets/invoice/list.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/invoice/feather.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/invoice/dayjs.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/invoice/phoenix.js'; ?>"></script>

	<!-- Print -->
	<script>
		const printButton = document.querySelector('.print-button');

		// Print PDF.
		printButton.addEventListener('click', () => {
			// window.print();
			const iframe = document.createElement('iframe');
			iframe.style.position = 'fixed';
			iframe.style.right = '100%';
			iframe.style.bottom = '100%';
			iframe.src = 'document.pdf';
			iframe.onload = () => {
				iframe.contentWindow.print();
			};
			document.body.appendChild(iframe);
		});
	</script>

</body>

</html>
