(function() {

	const remainingTime = (endTime) => {
		const total = Date.parse(endTime) - Date.parse(new Date());
		const seconds = Math.floor( (total/1000) % 60 );
		const minutes = Math.floor( (total/1000/60) % 60 );
		const hours = Math.floor( (total/(1000*60*60)) % 24 );
		const days = Math.floor( total/(1000*60*60*24) );

		return {total, days, hours, minutes, seconds};
	}

	const initializeTimer = (endTime = '') => {
		const updateTimer = () => {
			const time = remainingTime(endTime);
			document.querySelector('.seconds').textContent = `${time.seconds} Seconds`;
			document.querySelector('.days').textContent = `${time.days} Days`;
			document.querySelector('.minutes').textContent = `${time.minutes} Minutes`;
			document.querySelector('.hours').textContent = `${time.hours} Hours`;
		    if (time.total <= 0) {
		      	clearInterval(timeInterval);
		    }
		}

		updateTimer();
		const timeInterval = setInterval(updateTimer, 1000);
	}

	const countDown = document.querySelector('.timers');
	if (countDown) {
		initializeTimer('October 31 2021');
	}

}());