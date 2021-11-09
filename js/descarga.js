//32 Bits

const downloadBtn = document.querySelector(".download-btn");
const countdown = document.querySelector(".countdown");
const pleaseWaitText = document.querySelector(".pleaseWait-text");
const manualDownloadText = document.querySelector(".manualDownload-text");
const manualDownloadLink = document.querySelector(".manualDownload-link");
var timeLeft = 10;
downloadBtn.addEventListener("click", () => {
	downloadBtn.style.display = "none";
	countdown.innerHTML = "La descarga comenzará automáticamente en <span>" + timeLeft + "</span> segundos.";
	var downloadTimer = setInterval(function timeCount(){
		timeLeft -= 1;
		countdown.innerHTML = "La descarga comenzará automáticamente en <span>" + timeLeft + "</span> segundos.";
		if(timeLeft <= 0){
			clearInterval(downloadTimer);
			pleaseWaitText.style.display = "block";
			let download_href = "downloads/Setup-x32.zip";
			window.location.href = download_href;
			manualDownloadLink.href = download_href;
			setTimeout(() => {
				pleaseWaitText.style.display = "none";
				manualDownloadText.style.display = "block";
				}, 4000);
			}
		}, 1000);
    });
	
//64 bits
	
const downloadBtn2 = document.querySelector(".download-btn-2");
const countdown2 = document.querySelector(".countdown-2");
const pleaseWaitText2 = document.querySelector(".pleaseWait-text-2");
const manualDownloadText2 = document.querySelector(".manualDownload-text-2");
const manualDownloadLink2 = document.querySelector(".manualDownload-link-2");
var timeLeft = 10;
downloadBtn2.addEventListener("click", () => {
	downloadBtn2.style.display = "none";
	countdown2.innerHTML = "La descarga comenzará automáticamente en <span>" + timeLeft + "</span> segundos.";
	var downloadTimer = setInterval(function timeCount(){
		timeLeft -= 1;
		countdown2.innerHTML = "La descarga comenzará automáticamente en <span>" + timeLeft + "</span> segundos.";
		if(timeLeft <= 0){
			clearInterval(downloadTimer);
			pleaseWaitText2.style.display = "block";
			let download_href = "downloads/Setup-x64.zip";
			window.location.href = download_href;
			manualDownloadLink2.href = download_href;
			setTimeout(() => {
				pleaseWaitText2.style.display = "none";
				manualDownloadText2.style.display = "block";
				}, 4000);
			}
		}, 1000);
	});