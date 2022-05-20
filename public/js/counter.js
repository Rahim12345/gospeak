window.onload = function () {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                let counts1 = setInterval(updated1);
                let upto1 = 0;
                function updated1() {
                    var count1 = document.getElementById("counter1");
                    count1.innerHTML = ++upto1;
                    if (upto1 === 450) {
                        clearInterval(counts1);
                    }
                }

                let counts2 = setInterval(updated2);
                let upto2 = 0;
                function updated2() {
                    var count2 = document.getElementById("counter2");
                    count2.innerHTML = ++upto2;
                    if (upto2 === 500) {
                        clearInterval(counts2);
                    }
                }

                let counts3 = setInterval(updated3);
                let upto3 = 0;
                function updated3() {
                    var count3 = document.getElementById("counter3");
                    count3.innerHTML = ++upto3;
                    if (upto3 === 150) {
                        clearInterval(counts3);
                    }
                }
                
                return;
            }
        });
    });
    observer.observe(document.querySelector('#counters'));
}
