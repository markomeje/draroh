(function() {

	const remaining = (endtime) => {
		 const total = Date.parse(endtime) - Date.parse(new Date());
		 const seconds = Math.floor( (total/1000) % 60 );
		 const minutes = Math.floor( (total/1000/60) % 60 );
		 const hours = Math.floor( (total/(1000*60*60)) % 24 );
		 const days = Math.floor( total/(1000*60*60*24) );

		 return {total, days, hours, minutes, seconds};
	}

	const initialize = (endtime) => {
		const update = () => {
			const time = remaining(endtime);
			document.querySelector('.seconds').textContent = `${time.seconds} Seconds`;
			document.querySelector('.days').textContent = `${time.days} Days`;
			document.querySelector('.minutes').textContent = `${time.minutes} Minutes`;
			document.querySelector('.hours').textContent = `${time.hours} Hours`;
		    if (time.total <= 0) {
		      	clearInterval(timeinterval);
		    }
		}

		update();
		const timeinterval = setInterval(update, 1000);
	}

	initialize('October 31 2021');

}());