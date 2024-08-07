<div class="col-span-12 h-full rounded-sm border border-stroke bg-white px-5 pb-5 pt-7 shadow-sm sm:px-7 xl:col-span-5">
    <div class="mb-3">
        <div>
            <h4 class="text-2xl text-slate-600 font-bold">
                Sentimen Analytics
            </h4>
        </div>
    </div>
    <div class="mb-2">
        <div id="chart" class="mx-auto flex justify-center"></div>
    </div>
    <div class="-mx-8 flex flex-col items-center justify-center gap-y-3">
        <div class="w-full px-8">
            <div class="flex w-full items-center">
                <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-primary"></span>
                <p class="flex w-full justify-between text-sm font-medium text-black">
                    <span> Positive </span>
                    <span>
                        {{ $sentimenData['positive'] !== 0 ? round(($sentimenData['positive'] / $sentimenData['total']) * 100) : 0 }}%</span>
                </p>
            </div>
        </div>
        <div class="w-full px-8">
            <div class="flex w-full items-center">
                <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#6577F3]"></span>
                <p class="flex w-full justify-between text-sm font-medium text-black">
                    <span> Negative </span>
                    <span>
                        {{ $sentimenData['negative'] !== 0 ? round(($sentimenData['negative'] / $sentimenData['total']) * 100) : 0 }}%
                    </span>
                </p>
            </div>
        </div>
        <div class="w-full px-8">
            <div class="flex w-full items-center">
                <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#8FD0EF]"></span>
                <p class="flex w-full justify-between text-sm font-medium text-black">
                    <span> Neutral </span>
                    <span>
                        {{ $sentimenData['neutral'] !== 0 ? round(($sentimenData['neutral'] / $sentimenData['total']) * 100) : 0 }}%
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
