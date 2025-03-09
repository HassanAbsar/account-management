<!DOCTYPE html>
<html lang="en">

<head>
	<!-- PAGE TITLE HERE -->
	<title>Manage Accounts</title>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Dexignlabs">
	<meta name="robots" content="index, follow">


	<meta name="description" content="Elevate your administrative efficiency and enhance productivity with the Fillow SaaS Admin Dashboard Template. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.">

	<meta property="og:title" content="Manage Accounts">
	<meta property="og:description" content="Elevate your administrative efficiency and enhance productivity with the Fillow SaaS Admin Dashboard Template. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.">
	<meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<meta name="twitter:title" content="Manage Accounts">
	<meta name="twitter:description" content="Elevate your administrative efficiency and enhance productivity with the Fillow SaaS Admin Dashboard Template. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.">
	<meta name="twitter:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="twitter:card" content="summary_large_image">

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('/assets/images/favicon.png')}}">
	<link href="{{ asset('/assets/vendor/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{ asset('/assets/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/assets/vendor/nouislider/nouislider.min.css')}}">
	<!-- Datatable -->
	<link href="{{ asset('/assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{ asset('/assets/vendor/datatables/responsive/responsive.css')}}" rel="stylesheet">
	<!-- Style css -->
	<link href="{{ asset('/assets/css/style.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/assets/vendor/select2/css/select2.min.css')}}">


</head>

<body>
	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
			<a href="index.html" class="brand-logo">

				<svg width="200" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient id="paint0_linear" x1="0" y1="0" x2="1" y2="1">
							<stop offset="0%" stop-color="#6A5ACD" />
							<stop offset="100%" stop-color="#8A2BE2" />
						</linearGradient>
					</defs>

					<!-- Cube Design -->
					<g transform="scale(0.5)">
						<rect x="10" y="10" width="40" height="40" fill="url(#paint0_linear)" />
						<rect x="60" y="10" width="40" height="40" fill="url(#paint0_linear)" />
						<rect x="110" y="10" width="40" height="40" fill="white" />

						<rect x="10" y="60" width="40" height="40" fill="url(#paint0_linear)" />
						<rect x="60" y="60" width="40" height="40" fill="url(#paint0_linear)" />
						<rect x="110" y="60" width="40" height="40" fill="url(#paint0_linear)" />

						<rect x="10" y="110" width="40" height="40" fill="url(#paint0_linear)" />
						<rect x="60" y="110" width="40" height="40" fill="url(#paint0_linear)" />
						<rect x="110" y="110" width="40" height="40" fill="url(#paint0_linear)" />
					</g>
				</svg>

				<!-- <svg class="logo-abbr" width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"/>
					<defs>
					</defs>
				</svg>	 -->
				<div class="brand-title">
					<svg width="200" height="100" viewBox="0 0 200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
						<text x="30%" y="50%" font-size="20" text-anchor="middle" fill="url(#paint0_linear)" font-family="Arial, sans-serif" font-weight="bold">
							Bits & Bytes
						</text>
						<text x="30%" y="70%" font-size="12" text-anchor="middle" fill="#4E3F6B" font-family="Arial, sans-serif">
							TECHNOLOGY
						</text>
					</svg>
					<!-- <svg width="106" height="47" viewBox="0 0 106 47" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M12.926 11.059H8.65397V25.5596H3.71854V11.059H1V8.66123L3.71854 7.32371V5.9862C3.71854 3.90924 4.22556 2.3923 5.23962 1.43538C6.25368 0.478461 7.87725 0 10.1103 0C11.8148 0 13.3305 0.255542 14.6574 0.766625L13.3952 4.42033C12.4027 4.10498 11.4858 3.9473 10.6443 3.9473C9.94312 3.9473 9.43609 4.15935 9.12324 4.58344C8.8104 4.99665 8.65397 5.52949 8.65397 6.18193V7.32371H12.926V11.059ZM15.5474 2.60979C15.5474 0.989544 16.4428 0.179423 18.2336 0.179423C20.0244 0.179423 20.9197 0.989544 20.9197 2.60979C20.9197 3.38185 20.6932 3.98536 20.2401 4.42033C19.7978 4.84442 19.129 5.05646 18.2336 5.05646C16.4428 5.05646 15.5474 4.2409 15.5474 2.60979ZM20.6932 25.5596H15.7578V7.32371H20.6932V25.5596Z" fill="#4E3F6B"/>
				<path d="M30.8068 25.5596H25.8714V0.179423H30.8068V25.5596Z" fill="#4E3F6B"/>
				<path d="M40.9366 25.5596H36.0011V0.179423H40.9366V25.5596Z" fill="#4E3F6B"/>
				<path d="M50.0631 16.409C50.0631 18.2141 50.3544 19.5788 50.9369 20.5031C51.5302 21.4274 52.4904 21.8896 53.8173 21.8896C55.1334 21.8896 56.0773 21.4329 56.6491 20.5194C57.2316 19.5951 57.5229 18.225 57.5229 16.409C57.5229 14.6039 57.2316 13.2501 56.6491 12.3476C56.0665 11.445 55.1118 10.9937 53.7849 10.9937C52.4688 10.9937 51.5195 11.445 50.9369 12.3476C50.3544 13.2392 50.0631 14.5931 50.0631 16.409ZM62.5716 16.409C62.5716 19.3777 61.7949 21.6993 60.2414 23.3739C58.688 25.0485 56.525 25.8858 53.7525 25.8858C52.0157 25.8858 50.4838 25.5052 49.1569 24.744C47.83 23.972 46.8106 22.8683 46.0986 21.4329C45.3866 19.9975 45.0306 18.3229 45.0306 16.409C45.0306 13.4295 45.8019 11.1133 47.3446 9.46048C48.8872 7.80761 51.0556 6.98118 53.8496 6.98118C55.5865 6.98118 57.1183 7.36177 58.4452 8.12296C59.7721 8.88415 60.7916 9.977 61.5036 11.4015C62.2156 12.826 62.5716 14.4952 62.5716 16.409Z" fill="#4E3F6B"/>
				<path d="M81.5204 25.5596L80.1288 19.1819L78.2517 11.1242H78.1384L74.8374 25.5596H69.5297L64.3839 7.32371H69.3032L71.3906 15.3977C71.7251 16.844 72.0649 18.8394 72.4101 21.3839H72.5072C72.5503 20.5575 72.7391 19.2472 73.0736 17.4529L73.3325 16.0665L75.5655 7.32371H81.0026L83.1224 16.0665C83.1656 16.3057 83.2303 16.6591 83.3166 17.1267C83.4137 17.5943 83.5054 18.0945 83.5917 18.6274C83.678 19.1493 83.7535 19.6658 83.8182 20.1769C83.8938 20.6771 83.9369 21.0795 83.9477 21.3839H84.0448C84.1419 20.601 84.3145 19.5299 84.5626 18.1706C84.8107 16.8005 84.9887 15.8762 85.0966 15.3977L87.265 7.32371H92.1033L86.8928 25.5596H81.5204Z" fill="#4E3F6B"/>
				<path d="M94.3364 23.2271C94.3364 22.3137 94.5791 21.6232 95.0646 21.1556C95.55 20.688 96.2566 20.4542 97.1844 20.4542C98.0798 20.4542 98.7702 20.6934 99.2556 21.1719C99.7519 21.6504 100 22.3354 100 23.2271C100 24.0862 99.7519 24.7658 99.2556 25.266C98.7594 25.7553 98.069 26 97.1844 26C96.2782 26 95.577 25.7608 95.0807 25.2823C94.5845 24.793 94.3364 24.1079 94.3364 23.2271Z" fill="#4E3F6B"/>
				<path d="M3.15 43.09C2.83667 43.09 2.53 43.0633 2.23 43.01C1.93 42.9567 1.65 42.88 1.39 42.78C1.13667 42.68 0.906667 42.5533 0.7 42.4C0.62 42.34 0.563333 42.2733 0.53 42.2C0.503333 42.12 0.496667 42.0433 0.51 41.97C0.53 41.89 0.563333 41.8233 0.61 41.77C0.663333 41.7167 0.726667 41.6867 0.8 41.68C0.873333 41.6733 0.953333 41.6967 1.04 41.75C1.34 41.9633 1.66 42.12 2 42.22C2.34 42.3133 2.72333 42.36 3.15 42.36C3.75 42.36 4.19333 42.25 4.48 42.03C4.77333 41.8033 4.92 41.5067 4.92 41.14C4.92 40.84 4.81333 40.6067 4.6 40.44C4.39333 40.2667 4.04333 40.13 3.55 40.03L2.51 39.82C1.88333 39.6867 1.41333 39.47 1.1 39.17C0.793333 38.8633 0.64 38.4567 0.64 37.95C0.64 37.6367 0.703333 37.3533 0.83 37.1C0.956667 36.84 1.13333 36.62 1.36 36.44C1.58667 36.2533 1.85667 36.11 2.17 36.01C2.48333 35.91 2.83 35.86 3.21 35.86C3.63 35.86 4.02 35.92 4.38 36.04C4.74667 36.1533 5.07667 36.3267 5.37 36.56C5.44333 36.62 5.49333 36.69 5.52 36.77C5.54667 36.8433 5.55 36.9167 5.53 36.99C5.51 37.0567 5.47333 37.1133 5.42 37.16C5.37333 37.2067 5.31 37.2333 5.23 37.24C5.15667 37.2467 5.07333 37.22 4.98 37.16C4.71333 36.96 4.43667 36.8167 4.15 36.73C3.86333 36.6367 3.54667 36.59 3.2 36.59C2.84667 36.59 2.54 36.6433 2.28 36.75C2.02667 36.8567 1.82667 37.0133 1.68 37.22C1.54 37.42 1.47 37.6533 1.47 37.92C1.47 38.24 1.56667 38.4933 1.76 38.68C1.96 38.8667 2.28333 39.0033 2.73 39.09L3.77 39.31C4.44333 39.45 4.94 39.6633 5.26 39.95C5.58667 40.23 5.75 40.6133 5.75 41.1C5.75 41.3933 5.69 41.6633 5.57 41.91C5.45 42.1567 5.27667 42.37 5.05 42.55C4.82333 42.7233 4.55 42.8567 4.23 42.95C3.91 43.0433 3.55 43.09 3.15 43.09ZM8.44234 43.09C8.10901 43.09 7.80901 43.0267 7.54234 42.9C7.28234 42.7667 7.07568 42.5867 6.92234 42.36C6.76901 42.1333 6.69234 41.88 6.69234 41.6C6.69234 41.24 6.78234 40.9567 6.96234 40.75C7.14901 40.5433 7.45234 40.3967 7.87234 40.31C8.29901 40.2233 8.87901 40.18 9.61234 40.18H10.0623V40.71H9.62234C9.08234 40.71 8.65568 40.7367 8.34234 40.79C8.03568 40.8367 7.81901 40.92 7.69234 41.04C7.57234 41.16 7.51234 41.33 7.51234 41.55C7.51234 41.8233 7.60568 42.0467 7.79234 42.22C7.98568 42.3933 8.24568 42.48 8.57234 42.48C8.83901 42.48 9.07234 42.4167 9.27234 42.29C9.47901 42.1633 9.63901 41.99 9.75234 41.77C9.87234 41.55 9.93234 41.2967 9.93234 41.01V39.87C9.93234 39.4567 9.84901 39.16 9.68234 38.98C9.51568 38.7933 9.24234 38.7 8.86234 38.7C8.62901 38.7 8.39568 38.73 8.16234 38.79C7.92901 38.85 7.68234 38.9467 7.42234 39.08C7.32901 39.1267 7.24901 39.1433 7.18234 39.13C7.11568 39.11 7.06234 39.0733 7.02234 39.02C6.98234 38.9667 6.95901 38.9067 6.95234 38.84C6.94568 38.7667 6.95901 38.6967 6.99234 38.63C7.03234 38.5633 7.09234 38.51 7.17234 38.47C7.46568 38.3233 7.75568 38.2167 8.04234 38.15C8.32901 38.0833 8.60234 38.05 8.86234 38.05C9.28234 38.05 9.62901 38.12 9.90234 38.26C10.1757 38.3933 10.379 38.6 10.5123 38.88C10.6457 39.1533 10.7123 39.5067 10.7123 39.94V42.65C10.7123 42.7833 10.679 42.8867 10.6123 42.96C10.5523 43.0333 10.4623 43.07 10.3423 43.07C10.2157 43.07 10.119 43.0333 10.0523 42.96C9.98568 42.8867 9.95234 42.7833 9.95234 42.65V41.87H10.0423C9.98901 42.1233 9.88568 42.34 9.73234 42.52C9.58568 42.7 9.40234 42.84 9.18234 42.94C8.96234 43.04 8.71568 43.09 8.44234 43.09ZM13.7451 43.09C13.4117 43.09 13.1117 43.0267 12.8451 42.9C12.5851 42.7667 12.3784 42.5867 12.2251 42.36C12.0717 42.1333 11.9951 41.88 11.9951 41.6C11.9951 41.24 12.0851 40.9567 12.2651 40.75C12.4517 40.5433 12.7551 40.3967 13.1751 40.31C13.6017 40.2233 14.1817 40.18 14.9151 40.18H15.3651V40.71H14.9251C14.3851 40.71 13.9584 40.7367 13.6451 40.79C13.3384 40.8367 13.1217 40.92 12.9951 41.04C12.8751 41.16 12.8151 41.33 12.8151 41.55C12.8151 41.8233 12.9084 42.0467 13.0951 42.22C13.2884 42.3933 13.5484 42.48 13.8751 42.48C14.1417 42.48 14.3751 42.4167 14.5751 42.29C14.7817 42.1633 14.9417 41.99 15.0551 41.77C15.1751 41.55 15.2351 41.2967 15.2351 41.01V39.87C15.2351 39.4567 15.1517 39.16 14.9851 38.98C14.8184 38.7933 14.5451 38.7 14.1651 38.7C13.9317 38.7 13.6984 38.73 13.4651 38.79C13.2317 38.85 12.9851 38.9467 12.7251 39.08C12.6317 39.1267 12.5517 39.1433 12.4851 39.13C12.4184 39.11 12.3651 39.0733 12.3251 39.02C12.2851 38.9667 12.2617 38.9067 12.2551 38.84C12.2484 38.7667 12.2617 38.6967 12.2951 38.63C12.3351 38.5633 12.3951 38.51 12.4751 38.47C12.7684 38.3233 13.0584 38.2167 13.3451 38.15C13.6317 38.0833 13.9051 38.05 14.1651 38.05C14.5851 38.05 14.9317 38.12 15.2051 38.26C15.4784 38.3933 15.6817 38.6 15.8151 38.88C15.9484 39.1533 16.0151 39.5067 16.0151 39.94V42.65C16.0151 42.7833 15.9817 42.8867 15.9151 42.96C15.8551 43.0333 15.7651 43.07 15.6451 43.07C15.5184 43.07 15.4217 43.0333 15.3551 42.96C15.2884 42.8867 15.2551 42.7833 15.2551 42.65V41.87H15.3451C15.2917 42.1233 15.1884 42.34 15.0351 42.52C14.8884 42.7 14.7051 42.84 14.4851 42.94C14.2651 43.04 14.0184 43.09 13.7451 43.09ZM19.1578 43.09C18.8578 43.09 18.5545 43.0533 18.2478 42.98C17.9478 42.9067 17.6678 42.78 17.4078 42.6C17.3411 42.5533 17.2945 42.5 17.2678 42.44C17.2411 42.3733 17.2311 42.31 17.2378 42.25C17.2511 42.1833 17.2778 42.1267 17.3178 42.08C17.3645 42.0333 17.4178 42.0067 17.4778 42C17.5445 41.9867 17.6178 42 17.6978 42.04C17.9578 42.2 18.2078 42.3133 18.4478 42.38C18.6945 42.44 18.9378 42.47 19.1778 42.47C19.5578 42.47 19.8445 42.4 20.0378 42.26C20.2311 42.12 20.3278 41.93 20.3278 41.69C20.3278 41.5033 20.2645 41.3567 20.1378 41.25C20.0111 41.1367 19.8111 41.05 19.5378 40.99L18.6278 40.79C18.2078 40.7033 17.8945 40.5533 17.6878 40.34C17.4878 40.1267 17.3878 39.85 17.3878 39.51C17.3878 39.21 17.4645 38.9533 17.6178 38.74C17.7778 38.52 18.0011 38.35 18.2878 38.23C18.5745 38.11 18.9078 38.05 19.2878 38.05C19.5811 38.05 19.8578 38.09 20.1178 38.17C20.3845 38.2433 20.6245 38.3633 20.8378 38.53C20.9045 38.5767 20.9478 38.6333 20.9678 38.7C20.9945 38.76 20.9978 38.8233 20.9778 38.89C20.9645 38.95 20.9345 39.0033 20.8878 39.05C20.8411 39.09 20.7845 39.1133 20.7178 39.12C20.6511 39.1267 20.5811 39.1067 20.5078 39.06C20.3078 38.9267 20.1045 38.83 19.8978 38.77C19.6911 38.7033 19.4878 38.67 19.2878 38.67C18.9145 38.67 18.6311 38.7433 18.4378 38.89C18.2445 39.0367 18.1478 39.23 18.1478 39.47C18.1478 39.6567 18.2078 39.81 18.3278 39.93C18.4478 40.05 18.6345 40.1367 18.8878 40.19L19.7978 40.38C20.2311 40.4733 20.5545 40.6233 20.7678 40.83C20.9878 41.03 21.0978 41.3033 21.0978 41.65C21.0978 42.09 20.9211 42.44 20.5678 42.7C20.2145 42.96 19.7445 43.09 19.1578 43.09ZM24.8704 43.07C24.7637 43.07 24.6771 43.0467 24.6104 43C24.5504 42.9467 24.5137 42.88 24.5004 42.8C24.4937 42.7133 24.5137 42.6167 24.5604 42.51L27.3104 36.25C27.3704 36.1167 27.4404 36.0233 27.5204 35.97C27.6071 35.91 27.7004 35.88 27.8004 35.88C27.9004 35.88 27.9904 35.91 28.0704 35.97C28.1571 36.0233 28.2271 36.1167 28.2804 36.25L31.0404 42.51C31.0937 42.6167 31.1137 42.7133 31.1004 42.8C31.0937 42.8867 31.0604 42.9533 31.0004 43C30.9404 43.0467 30.8571 43.07 30.7504 43.07C30.6304 43.07 30.5337 43.04 30.4604 42.98C30.3871 42.9133 30.3271 42.82 30.2804 42.7L29.5404 40.99L29.9404 41.2H25.6404L26.0504 40.99L25.3204 42.7C25.2604 42.8267 25.1971 42.92 25.1304 42.98C25.0637 43.04 24.9771 43.07 24.8704 43.07ZM27.7904 36.91L26.1804 40.7L25.9404 40.51H29.6404L29.4204 40.7L27.8104 36.91H27.7904ZM33.9967 43.09C33.5634 43.09 33.1834 42.9867 32.8567 42.78C32.5367 42.5733 32.2867 42.2833 32.1067 41.91C31.9334 41.53 31.8467 41.0833 31.8467 40.57C31.8467 40.05 31.9334 39.6033 32.1067 39.23C32.2867 38.85 32.5367 38.56 32.8567 38.36C33.1834 38.1533 33.5634 38.05 33.9967 38.05C34.4367 38.05 34.8134 38.16 35.1267 38.38C35.4401 38.6 35.6501 38.8967 35.7567 39.27H35.6467V36.29C35.6467 36.1567 35.6801 36.0567 35.7467 35.99C35.8201 35.9167 35.9234 35.88 36.0567 35.88C36.1834 35.88 36.2801 35.9167 36.3467 35.99C36.4201 36.0567 36.4567 36.1567 36.4567 36.29V42.65C36.4567 42.7833 36.4234 42.8867 36.3567 42.96C36.2901 43.0333 36.1901 43.07 36.0567 43.07C35.9301 43.07 35.8301 43.0333 35.7567 42.96C35.6901 42.8867 35.6567 42.7833 35.6567 42.65V41.7L35.7667 41.84C35.6601 42.22 35.4467 42.5233 35.1267 42.75C34.8134 42.9767 34.4367 43.09 33.9967 43.09ZM34.1667 42.44C34.4667 42.44 34.7301 42.3667 34.9567 42.22C35.1834 42.0733 35.3567 41.86 35.4767 41.58C35.6034 41.3 35.6667 40.9633 35.6667 40.57C35.6667 39.9633 35.5301 39.5 35.2567 39.18C34.9901 38.86 34.6267 38.7 34.1667 38.7C33.8601 38.7 33.5934 38.7733 33.3667 38.92C33.1467 39.06 32.9734 39.27 32.8467 39.55C32.7267 39.8233 32.6667 40.1633 32.6667 40.57C32.6667 41.17 32.8034 41.6333 33.0767 41.96C33.3501 42.28 33.7134 42.44 34.1667 42.44ZM38.3968 43.07C38.2635 43.07 38.1635 43.0333 38.0968 42.96C38.0301 42.8867 37.9968 42.7833 37.9968 42.65V38.48C37.9968 38.3467 38.0301 38.2467 38.0968 38.18C38.1635 38.1067 38.2601 38.07 38.3868 38.07C38.5135 38.07 38.6101 38.1067 38.6768 38.18C38.7501 38.2467 38.7868 38.3467 38.7868 38.48V39.36L38.6768 39.22C38.8035 38.8467 39.0068 38.56 39.2868 38.36C39.5735 38.1533 39.9135 38.05 40.3068 38.05C40.7201 38.05 41.0535 38.15 41.3068 38.35C41.5668 38.5433 41.7401 38.8467 41.8268 39.26H41.6768C41.7968 38.8867 42.0101 38.5933 42.3168 38.38C42.6301 38.16 42.9935 38.05 43.4068 38.05C43.7735 38.05 44.0735 38.12 44.3068 38.26C44.5468 38.4 44.7268 38.6133 44.8468 38.9C44.9668 39.18 45.0268 39.5367 45.0268 39.97V42.65C45.0268 42.7833 44.9901 42.8867 44.9168 42.96C44.8501 43.0333 44.7501 43.07 44.6168 43.07C44.4901 43.07 44.3901 43.0333 44.3168 42.96C44.2501 42.8867 44.2168 42.7833 44.2168 42.65V40.01C44.2168 39.5633 44.1401 39.2367 43.9868 39.03C43.8335 38.8167 43.5735 38.71 43.2068 38.71C42.8068 38.71 42.4901 38.85 42.2568 39.13C42.0301 39.4033 41.9168 39.7767 41.9168 40.25V42.65C41.9168 42.7833 41.8801 42.8867 41.8068 42.96C41.7401 43.0333 41.6401 43.07 41.5068 43.07C41.3801 43.07 41.2801 43.0333 41.2068 42.96C41.1401 42.8867 41.1068 42.7833 41.1068 42.65V40.01C41.1068 39.5633 41.0268 39.2367 40.8668 39.03C40.7135 38.8167 40.4568 38.71 40.0968 38.71C39.6968 38.71 39.3801 38.85 39.1468 39.13C38.9201 39.4033 38.8068 39.7767 38.8068 40.25V42.65C38.8068 42.93 38.6701 43.07 38.3968 43.07ZM46.9413 43.05C46.8079 43.05 46.7079 43.0133 46.6413 42.94C46.5746 42.86 46.5413 42.75 46.5413 42.61V38.52C46.5413 38.38 46.5746 38.2733 46.6413 38.2C46.7079 38.1267 46.8079 38.09 46.9413 38.09C47.0679 38.09 47.1679 38.1267 47.2413 38.2C47.3146 38.2733 47.3513 38.38 47.3513 38.52V42.61C47.3513 42.75 47.3146 42.86 47.2413 42.94C47.1746 43.0133 47.0746 43.05 46.9413 43.05ZM46.9413 36.97C46.7746 36.97 46.6446 36.9267 46.5513 36.84C46.4579 36.7467 46.4113 36.6233 46.4113 36.47C46.4113 36.31 46.4579 36.19 46.5513 36.11C46.6446 36.0233 46.7746 35.98 46.9413 35.98C47.1146 35.98 47.2446 36.0233 47.3313 36.11C47.4246 36.19 47.4713 36.31 47.4713 36.47C47.4713 36.6233 47.4246 36.7467 47.3313 36.84C47.2446 36.9267 47.1146 36.97 46.9413 36.97ZM49.2655 43.07C49.1321 43.07 49.0321 43.0333 48.9655 42.96C48.8988 42.8867 48.8655 42.7833 48.8655 42.65V38.48C48.8655 38.3467 48.8988 38.2467 48.9655 38.18C49.0321 38.1067 49.1288 38.07 49.2555 38.07C49.3821 38.07 49.4788 38.1067 49.5455 38.18C49.6188 38.2467 49.6555 38.3467 49.6555 38.48V39.34L49.5455 39.22C49.6855 38.8333 49.9121 38.5433 50.2255 38.35C50.5455 38.15 50.9121 38.05 51.3255 38.05C51.7121 38.05 52.0321 38.12 52.2855 38.26C52.5455 38.4 52.7388 38.6133 52.8655 38.9C52.9921 39.18 53.0555 39.5367 53.0555 39.97V42.65C53.0555 42.7833 53.0188 42.8867 52.9455 42.96C52.8788 43.0333 52.7821 43.07 52.6555 43.07C52.5221 43.07 52.4188 43.0333 52.3455 42.96C52.2788 42.8867 52.2455 42.7833 52.2455 42.65V40.02C52.2455 39.5667 52.1555 39.2367 51.9755 39.03C51.8021 38.8167 51.5221 38.71 51.1355 38.71C50.6888 38.71 50.3321 38.85 50.0655 39.13C49.8055 39.4033 49.6755 39.77 49.6755 40.23V42.65C49.6755 42.93 49.5388 43.07 49.2655 43.07ZM57.6872 43C57.5405 43 57.4272 42.9633 57.3472 42.89C57.2739 42.81 57.2372 42.6967 57.2372 42.55V36.4C57.2372 36.2533 57.2739 36.1433 57.3472 36.07C57.4272 35.99 57.5405 35.95 57.6872 35.95H59.6172C60.7572 35.95 61.6372 36.25 62.2572 36.85C62.8772 37.45 63.1872 38.3233 63.1872 39.47C63.1872 40.0433 63.1072 40.55 62.9472 40.99C62.7939 41.4233 62.5639 41.79 62.2572 42.09C61.9505 42.39 61.5772 42.6167 61.1372 42.77C60.6972 42.9233 60.1905 43 59.6172 43H57.6872ZM58.0572 42.3H59.5572C60.0239 42.3 60.4272 42.24 60.7672 42.12C61.1139 42 61.4005 41.8233 61.6272 41.59C61.8605 41.3567 62.0339 41.0633 62.1472 40.71C62.2605 40.35 62.3172 39.9367 62.3172 39.47C62.3172 38.53 62.0872 37.8267 61.6272 37.36C61.1672 36.8867 60.4772 36.65 59.5572 36.65H58.0572V42.3ZM66.0791 43.09C65.7457 43.09 65.4457 43.0267 65.1791 42.9C64.9191 42.7667 64.7124 42.5867 64.5591 42.36C64.4057 42.1333 64.3291 41.88 64.3291 41.6C64.3291 41.24 64.4191 40.9567 64.5991 40.75C64.7857 40.5433 65.0891 40.3967 65.5091 40.31C65.9357 40.2233 66.5157 40.18 67.2491 40.18H67.6991V40.71H67.2591C66.7191 40.71 66.2924 40.7367 65.9791 40.79C65.6724 40.8367 65.4557 40.92 65.3291 41.04C65.2091 41.16 65.1491 41.33 65.1491 41.55C65.1491 41.8233 65.2424 42.0467 65.4291 42.22C65.6224 42.3933 65.8824 42.48 66.2091 42.48C66.4757 42.48 66.7091 42.4167 66.9091 42.29C67.1157 42.1633 67.2757 41.99 67.3891 41.77C67.5091 41.55 67.5691 41.2967 67.5691 41.01V39.87C67.5691 39.4567 67.4857 39.16 67.3191 38.98C67.1524 38.7933 66.8791 38.7 66.4991 38.7C66.2657 38.7 66.0324 38.73 65.7991 38.79C65.5657 38.85 65.3191 38.9467 65.0591 39.08C64.9657 39.1267 64.8857 39.1433 64.8191 39.13C64.7524 39.11 64.6991 39.0733 64.6591 39.02C64.6191 38.9667 64.5957 38.9067 64.5891 38.84C64.5824 38.7667 64.5957 38.6967 64.6291 38.63C64.6691 38.5633 64.7291 38.51 64.8091 38.47C65.1024 38.3233 65.3924 38.2167 65.6791 38.15C65.9657 38.0833 66.2391 38.05 66.4991 38.05C66.9191 38.05 67.2657 38.12 67.5391 38.26C67.8124 38.3933 68.0157 38.6 68.1491 38.88C68.2824 39.1533 68.3491 39.5067 68.3491 39.94V42.65C68.3491 42.7833 68.3157 42.8867 68.2491 42.96C68.1891 43.0333 68.0991 43.07 67.9791 43.07C67.8524 43.07 67.7557 43.0333 67.6891 42.96C67.6224 42.8867 67.5891 42.7833 67.5891 42.65V41.87H67.6791C67.6257 42.1233 67.5224 42.34 67.3691 42.52C67.2224 42.7 67.0391 42.84 66.8191 42.94C66.5991 43.04 66.3524 43.09 66.0791 43.09ZM71.4918 43.09C71.1918 43.09 70.8885 43.0533 70.5818 42.98C70.2818 42.9067 70.0018 42.78 69.7418 42.6C69.6751 42.5533 69.6285 42.5 69.6018 42.44C69.5751 42.3733 69.5651 42.31 69.5718 42.25C69.5851 42.1833 69.6118 42.1267 69.6518 42.08C69.6985 42.0333 69.7518 42.0067 69.8118 42C69.8785 41.9867 69.9518 42 70.0318 42.04C70.2918 42.2 70.5418 42.3133 70.7818 42.38C71.0285 42.44 71.2718 42.47 71.5118 42.47C71.8918 42.47 72.1785 42.4 72.3718 42.26C72.5651 42.12 72.6618 41.93 72.6618 41.69C72.6618 41.5033 72.5985 41.3567 72.4718 41.25C72.3451 41.1367 72.1451 41.05 71.8718 40.99L70.9618 40.79C70.5418 40.7033 70.2285 40.5533 70.0218 40.34C69.8218 40.1267 69.7218 39.85 69.7218 39.51C69.7218 39.21 69.7985 38.9533 69.9518 38.74C70.1118 38.52 70.3351 38.35 70.6218 38.23C70.9085 38.11 71.2418 38.05 71.6218 38.05C71.9151 38.05 72.1918 38.09 72.4518 38.17C72.7185 38.2433 72.9585 38.3633 73.1718 38.53C73.2385 38.5767 73.2818 38.6333 73.3018 38.7C73.3285 38.76 73.3318 38.8233 73.3118 38.89C73.2985 38.95 73.2685 39.0033 73.2218 39.05C73.1751 39.09 73.1185 39.1133 73.0518 39.12C72.9851 39.1267 72.9151 39.1067 72.8418 39.06C72.6418 38.9267 72.4385 38.83 72.2318 38.77C72.0251 38.7033 71.8218 38.67 71.6218 38.67C71.2485 38.67 70.9651 38.7433 70.7718 38.89C70.5785 39.0367 70.4818 39.23 70.4818 39.47C70.4818 39.6567 70.5418 39.81 70.6618 39.93C70.7818 40.05 70.9685 40.1367 71.2218 40.19L72.1318 40.38C72.5651 40.4733 72.8885 40.6233 73.1018 40.83C73.3218 41.03 73.4318 41.3033 73.4318 41.65C73.4318 42.09 73.2551 42.44 72.9018 42.7C72.5485 42.96 72.0785 43.09 71.4918 43.09ZM75.0663 43.07C74.9329 43.07 74.8329 43.0333 74.7663 42.96C74.6996 42.8867 74.6663 42.7833 74.6663 42.65V36.29C74.6663 36.1567 74.6996 36.0567 74.7663 35.99C74.8329 35.9167 74.9329 35.88 75.0663 35.88C75.1929 35.88 75.2929 35.9167 75.3663 35.99C75.4396 36.0567 75.4763 36.1567 75.4763 36.29V39.22H75.3463C75.4863 38.8333 75.7129 38.5433 76.0263 38.35C76.3463 38.15 76.7129 38.05 77.1263 38.05C77.5129 38.05 77.8329 38.12 78.0863 38.26C78.3463 38.4 78.5396 38.6133 78.6663 38.9C78.7929 39.18 78.8563 39.5367 78.8563 39.97V42.65C78.8563 42.7833 78.8196 42.8867 78.7463 42.96C78.6796 43.0333 78.5829 43.07 78.4563 43.07C78.3229 43.07 78.2196 43.0333 78.1463 42.96C78.0796 42.8867 78.0463 42.7833 78.0463 42.65V40.02C78.0463 39.5667 77.9563 39.2367 77.7763 39.03C77.6029 38.8167 77.3229 38.71 76.9363 38.71C76.4896 38.71 76.1329 38.85 75.8663 39.13C75.6063 39.4033 75.4763 39.77 75.4763 40.23V42.65C75.4763 42.93 75.3396 43.07 75.0663 43.07ZM82.8098 43.09C82.3698 43.09 81.9898 42.9767 81.6698 42.75C81.3565 42.5233 81.1465 42.22 81.0398 41.84L81.1498 41.73V42.65C81.1498 42.7833 81.1132 42.8867 81.0398 42.96C80.9732 43.0333 80.8765 43.07 80.7498 43.07C80.6165 43.07 80.5165 43.0333 80.4498 42.96C80.3832 42.8867 80.3498 42.7833 80.3498 42.65V36.29C80.3498 36.1567 80.3832 36.0567 80.4498 35.99C80.5165 35.9167 80.6165 35.88 80.7498 35.88C80.8765 35.88 80.9765 35.9167 81.0498 35.99C81.1232 36.0567 81.1598 36.1567 81.1598 36.29V39.27H81.0398C81.1532 38.8967 81.3665 38.6 81.6798 38.38C81.9932 38.16 82.3698 38.05 82.8098 38.05C83.2498 38.05 83.6298 38.1533 83.9498 38.36C84.2698 38.56 84.5165 38.85 84.6898 39.23C84.8698 39.6033 84.9598 40.05 84.9598 40.57C84.9598 41.0833 84.8698 41.53 84.6898 41.91C84.5165 42.2833 84.2665 42.5733 83.9398 42.78C83.6198 42.9867 83.2432 43.09 82.8098 43.09ZM82.6398 42.44C82.9465 42.44 83.2098 42.3667 83.4298 42.22C83.6565 42.0733 83.8298 41.86 83.9498 41.58C84.0765 41.3 84.1398 40.9633 84.1398 40.57C84.1398 39.9633 84.0032 39.5 83.7298 39.18C83.4632 38.86 83.0998 38.7 82.6398 38.7C82.3398 38.7 82.0765 38.7733 81.8498 38.92C81.6232 39.06 81.4465 39.27 81.3198 39.55C81.1998 39.8233 81.1398 40.1633 81.1398 40.57C81.1398 41.17 81.2765 41.6333 81.5498 41.96C81.8232 42.28 82.1865 42.44 82.6398 42.44ZM88.1999 43.09C87.7266 43.09 87.3166 42.9867 86.9699 42.78C86.6233 42.5733 86.3533 42.2833 86.1599 41.91C85.9733 41.53 85.8799 41.0833 85.8799 40.57C85.8799 40.1833 85.9333 39.8367 86.0399 39.53C86.1466 39.2167 86.3033 38.95 86.5099 38.73C86.7166 38.51 86.9599 38.3433 87.2399 38.23C87.5266 38.11 87.8466 38.05 88.1999 38.05C88.6733 38.05 89.0833 38.1533 89.4299 38.36C89.7766 38.5667 90.0433 38.86 90.2299 39.24C90.4233 39.6133 90.5199 40.0567 90.5199 40.57C90.5199 40.9567 90.4666 41.3033 90.3599 41.61C90.2533 41.9167 90.0966 42.1833 89.8899 42.41C89.6833 42.63 89.4366 42.8 89.1499 42.92C88.8699 43.0333 88.5533 43.09 88.1999 43.09ZM88.1999 42.44C88.4999 42.44 88.7633 42.3667 88.9899 42.22C89.2166 42.0733 89.3899 41.86 89.5099 41.58C89.6366 41.3 89.6999 40.9633 89.6999 40.57C89.6999 39.9633 89.5633 39.5 89.2899 39.18C89.0233 38.86 88.6599 38.7 88.1999 38.7C87.8933 38.7 87.6266 38.7733 87.3999 38.92C87.1799 39.06 87.0066 39.27 86.8799 39.55C86.7599 39.8233 86.6999 40.1633 86.6999 40.57C86.6999 41.17 86.8366 41.6333 87.1099 41.96C87.3833 42.28 87.7466 42.44 88.1999 42.44ZM93.2666 43.09C92.9332 43.09 92.6332 43.0267 92.3666 42.9C92.1066 42.7667 91.8999 42.5867 91.7466 42.36C91.5932 42.1333 91.5166 41.88 91.5166 41.6C91.5166 41.24 91.6066 40.9567 91.7866 40.75C91.9732 40.5433 92.2766 40.3967 92.6966 40.31C93.1232 40.2233 93.7032 40.18 94.4366 40.18H94.8866V40.71H94.4466C93.9066 40.71 93.4799 40.7367 93.1666 40.79C92.8599 40.8367 92.6432 40.92 92.5166 41.04C92.3966 41.16 92.3366 41.33 92.3366 41.55C92.3366 41.8233 92.4299 42.0467 92.6166 42.22C92.8099 42.3933 93.0699 42.48 93.3966 42.48C93.6632 42.48 93.8966 42.4167 94.0966 42.29C94.3032 42.1633 94.4632 41.99 94.5766 41.77C94.6966 41.55 94.7566 41.2967 94.7566 41.01V39.87C94.7566 39.4567 94.6732 39.16 94.5066 38.98C94.3399 38.7933 94.0666 38.7 93.6866 38.7C93.4532 38.7 93.2199 38.73 92.9866 38.79C92.7532 38.85 92.5066 38.9467 92.2466 39.08C92.1532 39.1267 92.0732 39.1433 92.0066 39.13C91.9399 39.11 91.8866 39.0733 91.8466 39.02C91.8066 38.9667 91.7832 38.9067 91.7766 38.84C91.7699 38.7667 91.7832 38.6967 91.8166 38.63C91.8566 38.5633 91.9166 38.51 91.9966 38.47C92.2899 38.3233 92.5799 38.2167 92.8666 38.15C93.1532 38.0833 93.4266 38.05 93.6866 38.05C94.1066 38.05 94.4532 38.12 94.7266 38.26C94.9999 38.3933 95.2032 38.6 95.3366 38.88C95.4699 39.1533 95.5366 39.5067 95.5366 39.94V42.65C95.5366 42.7833 95.5032 42.8867 95.4366 42.96C95.3766 43.0333 95.2866 43.07 95.1666 43.07C95.0399 43.07 94.9432 43.0333 94.8766 42.96C94.8099 42.8867 94.7766 42.7833 94.7766 42.65V41.87H94.8666C94.8132 42.1233 94.7099 42.34 94.5566 42.52C94.4099 42.7 94.2266 42.84 94.0066 42.94C93.7866 43.04 93.5399 43.09 93.2666 43.09ZM97.4493 43.07C97.316 43.07 97.2126 43.0333 97.1393 42.96C97.0726 42.8867 97.0393 42.7833 97.0393 42.65V38.48C97.0393 38.3467 97.0726 38.2467 97.1393 38.18C97.206 38.1067 97.3026 38.07 97.4293 38.07C97.556 38.07 97.6526 38.1067 97.7193 38.18C97.7926 38.2467 97.8293 38.3467 97.8293 38.48V39.29H97.7293C97.836 38.8967 98.0393 38.5933 98.3393 38.38C98.6393 38.1667 99.0093 38.0533 99.4493 38.04C99.5493 38.0333 99.6293 38.0567 99.6893 38.11C99.7493 38.1567 99.7826 38.24 99.7893 38.36C99.796 38.4733 99.7693 38.5633 99.7093 38.63C99.6493 38.6967 99.556 38.7367 99.4293 38.75L99.2693 38.77C98.816 38.81 98.466 38.9567 98.2193 39.21C97.9793 39.4567 97.8593 39.7967 97.8593 40.23V42.65C97.8593 42.7833 97.8226 42.8867 97.7493 42.96C97.6826 43.0333 97.5826 43.07 97.4493 43.07ZM102.415 43.09C101.981 43.09 101.601 42.9867 101.275 42.78C100.955 42.5733 100.705 42.2833 100.525 41.91C100.351 41.53 100.265 41.0833 100.265 40.57C100.265 40.05 100.351 39.6033 100.525 39.23C100.705 38.85 100.955 38.56 101.275 38.36C101.601 38.1533 101.981 38.05 102.415 38.05C102.855 38.05 103.231 38.16 103.545 38.38C103.858 38.6 104.068 38.8967 104.175 39.27H104.065V36.29C104.065 36.1567 104.098 36.0567 104.165 35.99C104.238 35.9167 104.341 35.88 104.475 35.88C104.601 35.88 104.698 35.9167 104.765 35.99C104.838 36.0567 104.875 36.1567 104.875 36.29V42.65C104.875 42.7833 104.841 42.8867 104.775 42.96C104.708 43.0333 104.608 43.07 104.475 43.07C104.348 43.07 104.248 43.0333 104.175 42.96C104.108 42.8867 104.075 42.7833 104.075 42.65V41.7L104.185 41.84C104.078 42.22 103.865 42.5233 103.545 42.75C103.231 42.9767 102.855 43.09 102.415 43.09ZM102.585 42.44C102.885 42.44 103.148 42.3667 103.375 42.22C103.601 42.0733 103.775 41.86 103.895 41.58C104.021 41.3 104.085 40.9633 104.085 40.57C104.085 39.9633 103.948 39.5 103.675 39.18C103.408 38.86 103.045 38.7 102.585 38.7C102.278 38.7 102.011 38.7733 101.785 38.92C101.565 39.06 101.391 39.27 101.265 39.55C101.145 39.8233 101.085 40.1633 101.085 40.57C101.085 41.17 101.221 41.6333 101.495 41.96C101.768 42.28 102.131 42.44 102.585 42.44Z" fill="#717579"/>
				</svg> -->




				</div>
			</a>


			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
            Nav header end
        ***********************************-->



		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Dashboard
							</div>
						</div>
						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
									<i id="icon-light" class="fas fa-sun"></i>
									<i id="icon-dark" class="fas fa-moon"></i>

								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="dlabnav">
			<div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<!-- <li class="menu-label"><a href="">Accounts</a></li> -->
					<li><a href="{{route('receivable.index')}}" aria-expanded="false">
							<i class="fas fa-arrow-down"></i>
							<span class="nav-text">Receivable</span>
						</a>
					</li>
					<li><a href="{{ route('payable.index')}}" aria-expanded="false">
							<i class="fas fa-file-invoice"></i>
							<span class="nav-text">Payable</span>
						</a>
					</li>
					<li><a href="{{ route('city.index') }}" aria-expanded="false">
							<i class="fas fa-map-marker-alt"></i>
							<span class="nav-text">City</span>
						</a>
					</li>
					<li><a href="{{ route('ledger_summary') }}" aria-expanded="false">
							<i class="fas fa-chart-line"></i>
							<span class="nav-text">Ledger Report</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->


		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body default-height">
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="app-hero-header d-flex justify-content-between">
							<h5 class="d-flex align-items-center">@yield('title')</h5>
							<h5>@yield('button')</h5>
						</div>
						@include('includes.errors')
						@include('includes.success')
						@yield('content')
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->
		<!-- Modal -->

		<!--**********************************
            Footer start
        ***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by BITS&BYTES Technology 2025</p>
			</div>
		</div>
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/assets/vendor/global/global.min.js')}}"></script>
	<!-- DATATABLE vendors -->
	<script src="{{ asset('/assets/vendor/datatables/js/jquery.dataTables.min.js')}}" defer></script>
	<script src="{{ asset('/assets/vendor/datatables/responsive/responsive.js')}}" defer></script>
	<script src="{{ asset('/assets/vendor/bootstrap-select/js/bootstrap-select.min.js')}}" defer></script>
	<script src="{{ asset('/assets/vendor/select2/js/select2.full.min.js')}}"></script>
	<script src="{{ asset('/assets/vendor/owl-carousel/owl.carousel.js')}}" defer></script>

	<script src="{{ asset('/assets/js/custom.min.js')}}" defer></script>
	<script src="{{ asset('/assets/js/dlabnav-init.js')}}" defer></script>
	<script src="{{ asset('/assets/js/demo.js')}}" defer></script>
	<script src="{{ asset('/assets/js/styleSwitcher.js')}}" defer></script>
	@stack('custom_scripts')
	<script>
		$.sidebarMenu = function(menu) {
			var animationSpeed = 300;

			$(menu).on("click", "li a", function(e) {
				var $this = $(this);
				var checkElement = $this.next();

				if (checkElement.is("ul") && checkElement.is(":visible")) {
					checkElement.slideUp(animationSpeed, function() {
						checkElement.removeClass("menu-open");
					});
					checkElement.parent("li").removeClass("active");
				} else if (checkElement.is("ul") && !checkElement.is(":visible")) {
					var parent = $this.parents("ul").first();
					var ul = parent.find("ul:visible").slideUp(animationSpeed);
					ul.removeClass("menu-open");

					var parent_li = $this.parent("li");
					checkElement.slideDown(animationSpeed, function() {
						checkElement.addClass("menu-open");
						parent.find("li.active").removeClass("active");
						parent_li.addClass("active");
					});
				}

				if (checkElement.is("ul")) {
					e.preventDefault();
				}
			});
		};

		// Apply the sidebar functionality to your menu
		$(document).ready(function() {
			$.sidebarMenu($("#menu"));
		});

		function cardsCenter() {
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.card-slider').owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive: {
					0: {
						items: 1
					},
					576: {
						items: 1
					},
					800: {
						items: 1
					},
					991: {
						items: 1
					},
					1200: {
						items: 1
					},
					1600: {
						items: 1
					}
				}
			})
		}

		jQuery(window).on('load', function() {
			setTimeout(function() {
				cardsCenter();
			}, 1000);
		});
	</script>

</body>

</html>