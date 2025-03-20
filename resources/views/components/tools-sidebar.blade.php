<div class="bb-tools-sidebar-overlay w-full h-screen fixed top-[0] left-[0] bg-[#00000080] z-[16] hidden"></div>
<div class="bb-tools-sidebar w-[300px] h-screen fixed right-[0] top-[0] bg-[#fff] transition-all duration-[0.3s] ease z-[16] translate-x-[300px]">
    <a href="javascript:void(0)" class="bb-tools-sidebar-toggle in-out absolute top-[45%] right-[302px] w-[40px] h-[40px] bg-[#3d4750] transition-all duration-[0.3s] ease-in flex items-center justify-center text-[25px] z-[-1] rounded-[5px]">
        <i class="ri-settings-fill text-[20px] text-[#fff]"></i>
    </a>
    <div class="bb-bar-title mb-[15px] p-[15px] flex flex-row justify-between items-center border-b-[1px] border-solid border-[#eee] ">
        <h6 class="m-[0] font-quicksand text-[17px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">Tools</h6>
        <a href="#" class="close-tools text-[#ff0000] text-[17px] font-semibold leading-[28px] tracking-[0.03rem]"><i class="ri-close-line"></i></a>
    </div>
    <div class="bb-tools-detail h-[calc(100vh-72px)] px-[15px] pb-[15px] overflow-auto">
        <div class="bb-tools-block">
            <h3 class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">Select Color</h3>
            <ul class="bb-color">
                <li class="color-primary inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#6c7fd8] active-variant"></li>
                <li class="color-1 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#8118d5]"></li>
                <li class="color-2 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#5f6af5]"></li>
                <li class="color-3 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#f5885f]"></li>
                <li class="color-4 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#32dbe2]"></li>
                <li class="color-5 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#3f51b5]"></li>
                <li class="color-6 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#f44336]"></li>
                <li class="color-7 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#e91e63]"></li>
                <li class="color-8 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#607d8b]"></li>
                <li class="color-9 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#5eb595]"></li>
            </ul>
        </div>
        <div class="bb-tools-block">
            <h3 class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">Dark Modes</h3>
            <div class="bb-tools-dark flex flex-wrap flex-row justify-between">
                <div class="mode-primary bb-dark-item mode light relative w-[125px] mb-[10px] text-center active-dark" data-bb-mode-tool="light">
                    <img src="assets/img/tools/light.png" alt="light" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">Light</p>
                </div>
                <div class="bb-dark-item mode dark relative w-[125px] mb-[10px] text-center" data-bb-mode-tool="dark">
                    <img src="assets/img/tools/dark.png" alt="dark" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">Dark</p>
                </div>
            </div>
        </div>
        <div class="bb-tools-block">
            <h3 class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">RTL Modes</h3>
            <div class="bb-tools-rtl flex flex-wrap flex-row justify-between">
                <div class="bb-tools-item ltr relative w-[125px] mb-[10px] text-center active-rtl" data-bb-mode-tool="ltr">
                    <img src="assets/img/tools/ltr.png" alt="ltr" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">LTR</p>
                </div>
                <div class="bb-tools-item rtl relative w-[125px] mb-[10px] text-center" data-bb-mode-tool="rtl">
                    <img src="assets/img/tools/rtl.png" alt="rtl" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">RTL</p>
                </div>
            </div>
        </div>
        <div class="bb-tools-block">
            <h3 class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">Box Design</h3>
            <div class="bb-tools-box flex flex-wrap flex-row justify-between">
                <div class="bb-tools-item default relative w-[125px] mb-[10px] text-center active-box" data-bb-mode-tool="default">
                    <img src="assets/img/tools/box-0.png" alt="box-0" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">Default</p>
                </div>
                <div class="bb-tools-item box-1 relative w-[125px] mb-[10px] text-center" data-bb-mode-tool="box-1">
                    <img src="assets/img/tools/box-1.png" alt="box-1" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">Box-1</p>
                </div>
            </div>
        </div>
    </div>
</div>
