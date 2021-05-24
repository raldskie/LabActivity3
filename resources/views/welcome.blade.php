<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>New Age - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/my-styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/my-styles.css') }}">

        <script>


window.addEventListener('DOMContentLoaded', event => {

// Activate Bootstrap scrollspy on the main nav element
const mainNav = document.body.querySelector('#mainNav');
if (mainNav) {
    new bootstrap.ScrollSpy(document.body, {
        target: '#mainNav',
        offset: 74,
    });
};

// Collapse responsive navbar when toggler is visible
const navbarToggler = document.body.querySelector('.navbar-toggler');
const responsiveNavItems = [].slice.call(
    document.querySelectorAll('#navbarResponsive .nav-link')
);
responsiveNavItems.map(function (responsiveNavItem) {
    responsiveNavItem.addEventListener('click', () => {
        if (window.getComputedStyle(navbarToggler).display !== 'none') {
            navbarToggler.click();
        }
    });
});

});


        </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top"><i class="fa fa-coffee" aria-hidden="true"></i> Workkit</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                    </ul>
                    <a href="{{ route('login') }}">
                    <button class="btn bg-primary rounded-pill px-3 mb-2 mb-lg-0">
                        <span class="d-flex align-items-center">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                            <i class="fa fa-sign-in primary" aria-hidden="true"></i><span class="small">Log In To Your Account</span>
                        </span>
                    </button>
</a>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5 py-5">
                <div class="row gx-5 align-items-center py-5">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">World's No.1 Platform For <span class="font-weight-bold">Collaboration</span></h1>
                            <p class="lead fw-normal text-muted mb-5">Use various collaborative tools to increase your online productivity!</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center mb-5">
                            <svg width="90%" height="100%" id="afc98551-3d88-4acb-87ed-36f06011ac7a" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="821.67627" height="579.00958" viewBox="0 0 821.67627 579.00958"><path d="M371.238,218.49521h-52.3999a19.01722,19.01722,0,0,0-19,19v56.81c-.66992-.04-1.33985-.1-2-.18a66.99888,66.99888,0,1,1,73.10009-77.63C371.0481,217.15518,371.1482,217.82523,371.238,218.49521Z" transform="translate(-189.16186 -160.49521)" fill="#f2f2f2"/><path d="M989.83814,216.49521h-671a21.023,21.023,0,0,0-21,21v354a21.023,21.023,0,0,0,21,21h671a21.023,21.023,0,0,0,21-21v-354A21.023,21.023,0,0,0,989.83814,216.49521Zm19,375a19.01722,19.01722,0,0,1-19,19h-671a19.01722,19.01722,0,0,1-19-19v-354a19.01722,19.01722,0,0,1,19-19h671a19.01722,19.01722,0,0,1,19,19Z" transform="translate(-189.16186 -160.49521)" fill="#3f3d56"/><path d="M956.83814,273.86484h-605a1,1,0,0,1,0-2h605a1,1,0,0,1,0,2Z" transform="translate(-189.16186 -160.49521)" fill="#3f3d56"/><path d="M522.83814,569.49521a1,1,0,0,1-1-1v-329a1,1,0,1,1,2,0v329A1.00005,1.00005,0,0,1,522.83814,569.49521Z" transform="translate(-189.16186 -160.49521)" fill="#3f3d56"/><path d="M673.83814,569.49521a1,1,0,0,1-1-1v-329a1,1,0,1,1,2,0v329A1.00005,1.00005,0,0,1,673.83814,569.49521Z" transform="translate(-189.16186 -160.49521)" fill="#3f3d56"/><path d="M824.83814,569.49521a1,1,0,0,1-1-1v-329a1,1,0,1,1,2,0v329A1.00005,1.00005,0,0,1,824.83814,569.49521Z" transform="translate(-189.16186 -160.49521)" fill="#3f3d56"/><path d="M425.75379,377.08261h-36.54a4.505,4.505,0,0,1-4.5-4.5V329.463a4.505,4.505,0,0,1,4.5-4.5h36.54a4.505,4.505,0,0,1,4.5,4.5v43.11963A4.505,4.505,0,0,1,425.75379,377.08261Z" transform="translate(-189.16186 -160.49521)" fill="#f9a826"/><path d="M477.75379,500.08261h-36.54a4.505,4.505,0,0,1-4.5-4.5V452.463a4.505,4.505,0,0,1,4.5-4.5h36.54a4.505,4.505,0,0,1,4.5,4.5v43.11963A4.505,4.505,0,0,1,477.75379,500.08261Z" transform="translate(-189.16186 -160.49521)" fill="#f9a826"/><path d="M595.75391,403.08261h-36.54a4.50508,4.50508,0,0,1-4.5-4.5V355.463a4.50508,4.50508,0,0,1,4.5-4.5h36.54a4.50508,4.50508,0,0,1,4.5,4.5v43.11963A4.50508,4.50508,0,0,1,595.75391,403.08261Z" transform="translate(-189.16186 -160.49521)" fill="#f9a826"/><path d="M748.75391,356.08261h-36.54a4.50508,4.50508,0,0,1-4.5-4.5V308.463a4.50508,4.50508,0,0,1,4.5-4.5h36.54a4.50508,4.50508,0,0,1,4.5,4.5v43.11963A4.50508,4.50508,0,0,1,748.75391,356.08261Z" transform="translate(-189.16186 -160.49521)" fill="#f9a826"/><path d="M889.75391,356.08261h-36.54a4.50508,4.50508,0,0,1-4.5-4.5V308.463a4.50508,4.50508,0,0,1,4.5-4.5h36.54a4.50508,4.50508,0,0,1,4.5,4.5v43.11963A4.50508,4.50508,0,0,1,889.75391,356.08261Z" transform="translate(-189.16186 -160.49521)" fill="#f9a826"/><path d="M954.75391,368.08261h-36.54a4.50508,4.50508,0,0,1-4.5-4.5V320.463a4.50508,4.50508,0,0,1,4.5-4.5h36.54a4.50508,4.50508,0,0,1,4.5,4.5v43.11963A4.50508,4.50508,0,0,1,954.75391,368.08261Z" transform="translate(-189.16186 -160.49521)" fill="#e6e6e6"/><path d="M925.75391,445.08261h-36.54a4.50508,4.50508,0,0,1-4.5-4.5V397.463a4.50508,4.50508,0,0,1,4.5-4.5h36.54a4.50508,4.50508,0,0,1,4.5,4.5v43.11963A4.50508,4.50508,0,0,1,925.75391,445.08261Z" transform="translate(-189.16186 -160.49521)" fill="#e6e6e6"/><path d="M801.75391,429.08261h-36.54a4.50508,4.50508,0,0,1-4.5-4.5V381.463a4.50508,4.50508,0,0,1,4.5-4.5h36.54a4.50508,4.50508,0,0,1,4.5,4.5v43.11963A4.50508,4.50508,0,0,1,801.75391,429.08261Z" transform="translate(-189.16186 -160.49521)" fill="#ff6584"/><path d="M730.75391,445.08261h-36.54a4.50508,4.50508,0,0,1-4.5-4.5V397.463a4.50508,4.50508,0,0,1,4.5-4.5h36.54a4.50508,4.50508,0,0,1,4.5,4.5v43.11963A4.50508,4.50508,0,0,1,730.75391,445.08261Z" transform="translate(-189.16186 -160.49521)" fill="#e6e6e6"/><path d="M577.75391,513.08261h-36.54a4.50508,4.50508,0,0,1-4.5-4.5V465.463a4.50508,4.50508,0,0,1,4.5-4.5h36.54a4.50508,4.50508,0,0,1,4.5,4.5v43.11963A4.50508,4.50508,0,0,1,577.75391,513.08261Z" transform="translate(-189.16186 -160.49521)" fill="#e6e6e6"/><path d="M392.75379,456.08261h-36.54a4.505,4.505,0,0,1-4.5-4.5V408.463a4.505,4.505,0,0,1,4.5-4.5h36.54a4.505,4.505,0,0,1,4.5,4.5v43.11963A4.505,4.505,0,0,1,392.75379,456.08261Z" transform="translate(-189.16186 -160.49521)" fill="#ff6584"/><path d="M495.75379,377.08261h-36.54a4.505,4.505,0,0,1-4.5-4.5V329.463a4.505,4.505,0,0,1,4.5-4.5h36.54a4.505,4.505,0,0,1,4.5,4.5v43.11963A4.505,4.505,0,0,1,495.75379,377.08261Z" transform="translate(-189.16186 -160.49521)" fill="#e6e6e6"/><path d="M465.83814,257.49521h-57a4,4,0,0,1,0-8h57a4,4,0,0,1,0,8Z" transform="translate(-189.16186 -160.49521)" fill="#ccc"/><path d="M626.83814,257.49521h-57a4,4,0,0,1,0-8h57a4,4,0,0,1,0,8Z" transform="translate(-189.16186 -160.49521)" fill="#ccc"/><path d="M777.83814,257.49521h-57a4,4,0,0,1,0-8h57a4,4,0,0,1,0,8Z" transform="translate(-189.16186 -160.49521)" fill="#ccc"/><path d="M918.83814,257.49521h-57a4,4,0,0,1,0-8h57a4,4,0,0,1,0,8Z" transform="translate(-189.16186 -160.49521)" fill="#ccc"/><path d="M338.17107,550.38656A10.05577,10.05577,0,0,1,329.471,537.6561L303.83814,513.795l13.55277-3.43814,25.20573,20.44382a10.11027,10.11027,0,0,1-4.42557,19.58585Z" transform="translate(-189.16186 -160.49521)" fill="#ffb8b8"/><polygon points="184.404 566.253 196.664 566.253 202.496 518.965 184.402 518.965 184.404 566.253" fill="#ffb8b8"/><path d="M370.93892,723.24476h38.53073a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H385.82577a14.88686,14.88686,0,0,1-14.88686-14.88686v0A0,0,0,0,1,370.93892,723.24476Z" transform="translate(591.28005 1300.86337) rotate(179.99738)" fill="#2f2e41"/><polygon points="100.345 557.401 112.193 560.555 129.994 516.359 112.509 511.705 100.345 557.401" fill="#ffb8b8"/><path d="M285.30672,718.54064h38.53073a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H300.19358a14.88686,14.88686,0,0,1-14.88686-14.88686v0A0,0,0,0,1,285.30672,718.54064Z" transform="matrix(-0.96635, -0.25722, 0.25722, -0.96635, 222.9961, 1345.38778)" fill="#2f2e41"/><path d="M389.12281,717.795H370.41553a4.72981,4.72981,0,0,1-4.72607-4.293L354.333,595.5704a3.74767,3.74767,0,0,0-7.321-.71484L314.03858,705.05478a4.74216,4.74216,0,0,1-5.7,3.24609l-17.40308-4.35156a4.74747,4.74747,0,0,1-3.44727-5.78711c.28418-1.11035,28.41065-111.02832,28.65625-112.1582,6.37281-46.96778,13.99707-59.55371,18.093-66.31445.33911-.55958.65064-1.07422.93115-1.56055.35108-.6084,2.51245-6.64453,3.88355-10.56445a4.79,4.79,0,0,1,2.43506-2.97754c17.21069-8.80176,37.34741-2.709,43.10913-.63184a4.6821,4.6821,0,0,1,2.33813,1.81543c17.28467,26.07129,8.80225,177.49121,6.92627,207.581A4.75127,4.75127,0,0,1,389.12281,717.795Z" transform="translate(-189.16186 -160.49521)" fill="#2f2e41"/><circle cx="151.68415" cy="234.02423" r="24.56103" fill="#ffb8b8"/><path d="M338.24365,512.3331l-.17651-.1709c-.33105-.32031-33.05566-32.37988-28.82056-62.02441,1.81128-12.67969,12.07032-20.78125,29.66773-23.43067a27.13473,27.13473,0,0,1,29.99976,19.1211l17.3999,59.48437Z" transform="translate(-189.16186 -160.49521)" fill="#ccc"/><path d="M321.49463,535.13583l-23.31836-23.17089a13.13671,13.13671,0,0,1-3.47973-12.39161l11.28857-45.91894A10.35411,10.35411,0,0,1,319.165,446.254a10.41072,10.41072,0,0,1,6.80908,12.79394L314.0896,499.44443l19.21826,20.63672Z" transform="translate(-189.16186 -160.49521)" fill="#ccc"/><path d="M446.56619,456.05763a10.05577,10.05577,0,0,1-14.88374,4.02868L400.553,476.22078l1.37589-13.70578,27.59693-17.07886a10.11028,10.11028,0,0,1,17.04041,10.62149Z" transform="translate(-189.16186 -160.49521)" fill="#ffb8b8"/><path d="M428.283,466.25982l-30.34625,13.11355a12.80885,12.80885,0,0,1-12.477-1.33846l-38.58893-27.64906A10.355,10.355,0,0,1,344.89728,435.4a10.41025,10.41025,0,0,1,14.40861-1.568l33.08845,26.042,26.30022-10.17517Z" transform="translate(-189.16186 -160.49521)" fill="#ccc"/><path d="M344.91778,402.38974c3.03-3.79642,8.69082-4.00051,12.85285-6.50478,5.45181-3.28033,7.70574-10.61077,5.94888-16.726s-6.93808-10.881-12.8784-13.16029-12.5494-2.30748-18.81589-1.20568c-9.33021,1.64048-18.51612,5.99512-24.20655,13.56895s-7.13858,18.66583-1.98149,26.61243c2.37026,3.65236,6.02921,6.66714,6.97549,10.91712,1.2423,5.57954-2.6714,10.96083-6.86421,14.846-4.77673,4.42628-10.257,8.1334-14.44192,13.12294s-6.97564,11.80621-5.066,18.03215c1.6,5.21635,6.25591,9.05948,11.36143,10.98408s10.66607,2.2027,16.12124,2.30939c5.29718.10361,10.92363-.02522,15.386-2.88141,4.77715-3.05764,7.32781-8.8583,7.51626-14.52705s-1.70587-11.22252-4.24464-16.2945c-1.51323-3.02314-3.27267-5.95256-4.27818-9.18027s-1.1797-6.89016.43058-9.86274c1.69267-3.12465,5.1171-5.009,8.6041-5.69419.18117-.0356.37286-.06739.57335-.0957a7.39847,7.39847,0,0,0,6.33328-8.62766C343.8467,405.80819,343.881,403.68869,344.91778,402.38974Z" transform="translate(-189.16186 -160.49521)" fill="#2f2e41"/><polygon points="483.229 567.3 470.969 567.3 465.137 520.012 483.231 520.013 483.229 567.3" fill="#a0616a"/><path d="M462.212,563.79684h23.64386a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H447.32509a0,0,0,0,1,0,0v0A14.88687,14.88687,0,0,1,462.212,563.79684Z" fill="#2f2e41"/><polygon points="572.184 553.413 561.033 558.506 536.079 517.917 552.538 510.399 572.184 553.413" fill="#a0616a"/><path d="M743.47033,716.96167h23.64388a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H728.58348a0,0,0,0,1,0,0v0A14.88685,14.88685,0,0,1,743.47033,716.96167Z" transform="translate(-422.52781 215.68843) rotate(-24.54855)" fill="#2f2e41"/><path d="M725.64338,568.3522a10.05579,10.05579,0,0,0,.80112-15.39851l14.4116-32.69992-18.30864,3.10281-10.87858,30.57671a10.11028,10.11028,0,0,0,13.9745,14.41891Z" transform="translate(-189.16186 -160.49521)" fill="#a0616a"/><path d="M671.6094,715.32658H659.89748a4.51686,4.51686,0,0,1-4.48828-4.17383l-6.387-170.5586a4.49977,4.49977,0,0,1,4.92529-4.80468l67.73487,7.19336a4.5013,4.5013,0,0,1,4.06225,4.39355l1.41943,75.23535a3.49205,3.49205,0,0,0,.23389,1.19336l27.78516,72.05274a4.49892,4.49892,0,0,1-2.64307,5.84082l-11.86841,4.373a4.50108,4.50108,0,0,1-5.55737-2.16406l-34.13257-66.36914a4.475,4.475,0,0,1-.4043-1.14258l-5.83081-28.09375a3.49992,3.49992,0,0,0-6.904.3125L676.08034,711.33829A4.499,4.499,0,0,1,671.6094,715.32658Z" transform="translate(-189.16186 -160.49521)" fill="#2f2e41"/><circle cx="488.27943" cy="222.17782" r="24.56103" fill="#a0616a"/><path d="M694.28491,556.18955a87.66432,87.66432,0,0,1-46.8728-14.19825l-.239-.165.02466-.28955,9.395-109.416a15.4205,15.4205,0,0,1,14.59887-14.06153c12.176-.55957,28.531.146,37.28589,6.66651,13.23071,9.85449,19.60767,24.69385,17.49561,40.7124-4.38013,33.21875.58178,78.0293,1.16186,83.0293l.042.36035-.32959.15137A77.26611,77.26611,0,0,1,694.28491,556.18955Z" transform="translate(-189.16186 -160.49521)" fill="#f9a826"/><path d="M727.02173,548.65292a5.007,5.007,0,0,1-3.68066-1.62207l-5.37256-5.86132a5.02581,5.02581,0,0,1-1.10913-4.79493l12.25073-41.46386-18.63989-39.14356a8.8323,8.8323,0,0,1-.60376-5.87939,8.809,8.809,0,0,1,16.31323-2.084l25.29468,41.042a11.95092,11.95092,0,0,1,.72,11.19824l-20.60986,45.665a4.98754,4.98754,0,0,1-3.76636,2.87988A5.05373,5.05373,0,0,1,727.02173,548.65292Z" transform="translate(-189.16186 -160.49521)" fill="#f9a826"/><path d="M553.89965,469.44778a10.05577,10.05577,0,0,0,14.99854-3.57767l35.438,4.59612L596.192,453.77776l-32.404-1.806a10.11028,10.11028,0,0,0-9.88836,17.476Z" transform="translate(-189.16186 -160.49521)" fill="#a0616a"/><path d="M632.01123,478.5621a13.42535,13.42535,0,0,1-1.84472-.12744l-55.751-7.73242a5.54112,5.54112,0,0,1-4.25073-3.11133,5.65746,5.65746,0,0,1-.31787-.8291h-.00025a5.56408,5.56408,0,0,1,.575-4.43164l4.61353-7.64893a5.58411,5.58411,0,0,1,4.75586-2.686h.00757l48.59594.05566,36.29395-32.51709a9.86788,9.86788,0,0,1,6.10718-2.49951,9.83491,9.83491,0,0,1,7.37256,16.81543L641.95313,474.128A13.364,13.364,0,0,1,632.01123,478.5621Z" transform="translate(-189.16186 -160.49521)" fill="#f9a826"/><path d="M680.2335,404.52319c2.2445-5.19457,4.14379-12.11253-.16123-15.78514-2.49712-2.13029-6.09385-2.13469-9.36546-2.39972-9.21732-.74668-18.70553-4.98771-23.21077-13.06356s-1.98923-20.08442,6.51023-23.728c5.72923-2.456,12.29743-.78291,18.29443.91767l18.0058,5.10593c5.35006,1.51712,10.96737,3.19025,14.819,7.20149,6.14268,6.39729,5.6835,17.21166.80459,24.618s-12.22635,15.13079-20.63767,17.94281Z" transform="translate(-189.16186 -160.49521)" fill="#2f2e41"/><path d="M928.64656,739.50479h-738.294a1.19069,1.19069,0,1,1,0-2.38137h738.294a1.19069,1.19069,0,1,1,0,2.38137Z" transform="translate(-189.16186 -160.49521)" fill="#3f3d56"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-primary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4 dark">"An intuitive solution to a common problem that we all face, wrapped up in a single app!"</div>
                        <i class="fa fa-4x fa-check-circle dark" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Device Mockups</h3>
                                        <p class="text-muted mb-0">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Flexible Use</h3>
                                        <p class="text-muted mb-0">Put an image, video, animation, or anything else in the screen!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Free to Use</h3>
                                        <p class="text-muted mb-0">As always, this theme is free to download and use for any purpose!</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Open Source</h3>
                                        <p class="text-muted mb-0">Since this theme is MIT licensed, you can use it commercially!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                        <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="assets/img/demo-screen.mp4" type="video/mp4" /></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic features section-->
        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Enter a new age of web design</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">This section is perfect for featuring some information about your application, why it was built, the problem it solves, or anything else! There's plenty of space for text here, so don't worry about writing too much.</p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="cta">
            <div class="cta-content">
                <div class="container px-5">
                    <h2 class="text-white display-1 lh-1 mb-4">
                        Stop waiting.
                        <br />
                        Start Collaborating.
                    </h2>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="{{ route('login') }}" target="_blank">Sign In To Your Account!</a>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Workkit 2021. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div>
        </footer>
        <!-- Feedback modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <form>
                            <div class="form-floating mb-4">
                                <input class="form-control" id="inputName" type="text" placeholder="Enter your name..." />
                                <label for="inputName">Name</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                <label for="inputEmail">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input class="form-control" id="inputPhone" type="tel" placeholder="(123) 456-7890" />
                                <label for="inputPhone">Phone number</label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea class="form-control" id="inputMessage" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                                <label for="inputMessage">Message</label>
                            </div>
                            <div class="d-grid"><button class="btn btn-primary rounded-pill py-3" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
