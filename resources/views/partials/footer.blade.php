<!-- FOTTER -->

<div class="w-full relative overflow-hidden mt-auto">
  <svg class="w-full h-auto" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1440 152" fill="none" xmlns="http://www.w3.org/2000/svg">
    @if(request()->is('admin/dashboard'))
      <!-- 20% blanco, 80% EBF1FD para la vista dashboard -->
      <rect width="20%" height="100%" fill="white"/>
      <rect x="20%" width="80%" height="100%" fill="#EBF1FD"/>
    @else
      <!-- 100% EBF1FD para todas las demás vistas -->
      <rect width="100%" height="100%" fill="#EBF1FD"/>
    @endif

    <!-- Tercer SVG (fondo) -->
    <path d="M0 0.5L98.0261 20.8925C159.266 33.6324 222.553 32.8155 283.444 18.4993C334.059 6.59907 386.417 4.00648 437.96 10.8482L476.714 15.9923C521.366 21.9193 566.615 21.7853 611.232 15.5938L637.298 11.9766C692.011 4.38409 747.63 6.42146 801.641 17.9966C867.779 32.171 936.187 32.0136 1002.26 17.5352L1004.18 17.1153C1054.4 6.10913 1106.07 3.19964 1157.21 8.49682L1208.13 13.7709C1242.29 17.3083 1276.71 17.3181 1310.87 13.8001L1440 0.5V148.5H0V0.5Z" fill="url(#paint0_linear_3)" fill-opacity="0.8"/>
    
    <!-- Segundo SVG (medio) -->
    <path d="M0 20.8918L48.4195 10.7698C124.756 -5.18821 203.768 -3.05062 279.13 17.0114L316.327 26.9135C383.493 44.7938 454.358 43.2233 520.666 22.3849C587.959 1.23687 659.923 -0.0602016 727.934 18.6491L777.877 32.3878C830.591 46.889 885.327 52.6463 939.905 49.4305L1027.47 44.2712C1058.75 42.4278 1089.8 37.6471 1120.19 29.992L1154.68 21.3038C1236.24 0.759588 1321.67 1.1223 1403.05 22.3584L1440 32V141.014L0 145.5V20.8918Z" fill="url(#paint0_linear_2)" fill-opacity="0.5"/>

    <!-- Primer SVG (frontal) -->
    <path d="M0.5 40.5L98.4977 15.6774C158.224 0.548723 221.051 3.00465 279.414 22.7495L309.271 32.8503C362.023 50.6967 419.409 49.1541 471.126 28.4993C523.598 7.54297 581.878 6.27052 635.215 24.9167L653.644 31.3592C707.548 50.2039 766.313 49.815 819.963 30.2586C866.886 13.1544 917.888 10.6569 966.258 23.0948L994.246 30.2918C1052.94 45.3848 1114.89 41.7342 1171.4 19.8515C1221.8 0.33828 1276.64 -4.72345 1329.76 5.23592L1440.5 26V152H0.5V40.5Z" fill="url(#paint0_linear_1)"/>

    <!-- Definición de gradientes -->
    <defs>
      <linearGradient id="paint0_linear_1" x1="-10" y1="9.5" x2="1430" y2="9.5" gradientUnits="userSpaceOnUse">
        <stop stop-color="#3E1A6D"/>
        <stop offset="0.5" stop-color="#9636AD"/>
        <stop offset="1" stop-color="#B57CBE"/>
      </linearGradient>
      <linearGradient id="paint0_linear_2" x1="-75.5525" y1="64.7539" x2="1748.71" y2="64.7539" gradientUnits="userSpaceOnUse">
        <stop stop-color="#3E1A6D"/>
        <stop offset="0.5" stop-color="#9636AD"/>
        <stop offset="1" stop-color="#B57CBE"/>
      </linearGradient>
      <linearGradient id="paint0_linear_3" x1="0" y1="74.5" x2="1440" y2="74.5" gradientUnits="userSpaceOnUse">
        <stop stop-color="#3E1A6D"/>
        <stop offset="0.5" stop-color="#9636AD"/>
        <stop offset="1" stop-color="#B57CBE"/>
      </linearGradient>
    </defs>

    <!-- Texto dentro del SVG -->
    <text x="10%" y="80%" text-anchor="middle" fill="white" text-xs>
      © 2024 All Rights Reserved
    </text>
  </svg>
</div>



<!-- FIN FOOTER -->