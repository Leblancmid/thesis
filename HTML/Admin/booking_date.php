<?php
$page = 'Transactions';
include('navigation.php');
include 'header.php'
?>
<div class="container-1">
    <div class="container-heading mt-3">
        <div class="details lh-1 mb-2">
            <p class="mb-1 fill"></p>
            <p>BOOKING DATE</p>
        </div>
        <img src="../../IMAGES/Icon-2/picpic.jpg">
    </div>

    <div class="container-1">
        <div class="container">
            <div class="calendar" id="currentMonthCalendar">
                <!-- Calendar content will be rendered here -->
                <div class="calendar">
                    <div class="header">
                        <div class="month">July 2024</div>
                        <div class="btns">
                            <!-- today -->
                            <div class="btn today">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-minus" viewBox="0 0 16 16">
                                    <path d="M5.5 10.5A.5.5 0 0 1 6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5" />
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                            <!-- previous month -->
                            <div class="btn prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="weekdays">
                        <div class="day">Sun</div>
                        <div class="day">Mon</div>
                        <div class="day">Tue</div>
                        <div class="day">Wed</div>
                        <div class="day">Thu</div>
                        <div class="day">Fri</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="days">
                    </div>
                </div>
            </div>

            <!-- Right Calendar: Next Month -->
            <div class="calendar" id="nextMonthCalendar">
                <!-- Calendar content will be rendered here -->
                <div class="calendar">
                    <div class="header">
                        <div class="month">August 2024</div>
                        <div class="btns">
                            <!-- next month -->
                            <div class="btn next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="weekdays">
                        <div class="day">Sun</div>
                        <div class="day">Mon</div>
                        <div class="day">Tue</div>
                        <div class="day">Wed</div>
                        <div class="day">Thu</div>
                        <div class="day">Fri</div>
                        <div class="day">Sat</div>
                    </div>
                    <div class="days">
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="information.php">Next</a>
        <a class="btn btn-secondary" href="add_transaction.php">Back</a>
    </div>
</div>

<script>
    const currentMonthContainer = document.getElementById("currentMonthCalendar");
    const nextMonthContainer = document.getElementById("nextMonthCalendar");

    let currentDisplayedMonth = 0;
    let selectedStartDate = null;
    let selectedEndDate = null;

    const renderCalendar = (container, offsetMonth) => {
        const daysContainer = container.querySelector(".days");
        const month = container.querySelector(".month");

        const months = [
            "January", "February", "March", "April",
            "May", "June", "July", "August",
            "September", "October", "November", "December"
        ];

        const date = new Date();
        let currentMonth = date.getMonth() + offsetMonth + currentDisplayedMonth;
        let currentYear = date.getFullYear();

        while (currentMonth > 11) {
            currentMonth -= 12;
            currentYear++;
        }
        while (currentMonth < 0) {
            currentMonth += 12;
            currentYear--;
        }

        date.setFullYear(currentYear, currentMonth, 1);
        date.setDate(1);

        const firstDay = new Date(currentYear, currentMonth, 1);
        const lastDay = new Date(currentYear, currentMonth + 1, 0);
        const lastDayIndex = lastDay.getDay();
        const lastDayDate = lastDay.getDate();
        const prevLastDay = new Date(currentYear, currentMonth, 0);
        const prevLastDayDate = prevLastDay.getDate();
        const nextDays = 7 - lastDayIndex - 1;


        month.innerHTML = `${months[currentMonth]} ${currentYear}`;

        let days = "";

        for (let x = firstDay.getDay(); x > 0; x--) {
            days += `<div class="day prev">${prevLastDayDate - x + 1}</div>`;
        }

        for (let i = 1; i <= lastDayDate; i++) {
            let classList = "day";
            const currentDate = new Date(currentYear, currentMonth, i);

            if (selectedStartDate && selectedStartDate.getTime() === currentDate.getTime()) {
                classList += " selected-start";
            }

            if (selectedEndDate && selectedEndDate.getTime() === currentDate.getTime()) {
                classList += " selected-end";
            }

            if (selectedStartDate && selectedEndDate &&
                currentDate > selectedStartDate && currentDate < selectedEndDate) {
                classList += " in-range";
            }

            if (
                i === new Date().getDate() &&
                currentMonth === new Date().getMonth() &&
                currentYear === new Date().getFullYear()
            ) {
                classList += " today";
            }

            days += `<div class="${classList}" data-date="${currentYear}-${currentMonth + 1}-${i}">${i}</div>`;
        }

        for (let j = 1; j <= nextDays; j++) {
            days += `<div class="day next">${j}</div>`;
        }

        daysContainer.innerHTML = days;

        const updateCheckInOutText = () => {
            const currentMonthDays = document.querySelectorAll(".day:not(.next):not(.prev)");
            currentMonthDays.forEach(day => {
                const dateStr = day.getAttribute("data-date");
                const date = new Date(dateStr);
                if (selectedStartDate && date.getTime() === selectedStartDate.getTime()) {
                    day.textContent += "\n Check-in";
                    day.style.fontSize = "9px";
                    day.style.whiteSpace = "pre-line";
                    day.style.textAlign = "center";
                } else if (selectedEndDate && date.getTime() === selectedEndDate.getTime()) {
                    day.textContent += "\n Check-out";
                    day.style.fontSize = "9px";
                    day.style.whiteSpace = "pre-line";
                    day.style.textAlign = "center";
                } else {}
            });
        };
        updateCheckInOutText()
        // Add event listeners for date selection
        const calendarDays = container.querySelectorAll(".day:not(.next):not(.prev)");
        calendarDays.forEach(day => {
            day.addEventListener("click", () => {
                const clickedDate = new Date(day.getAttribute("data-date"));
                if (!selectedStartDate) {
                    selectedStartDate = clickedDate;
                } else if (!selectedEndDate) {
                    if (clickedDate >= selectedStartDate) {
                        selectedEndDate = clickedDate;
                    } else {
                        alert('Selected Date must be higher');
                        return;
                        selectedEndDate = selectedStartDate;
                        selectedStartDate = clickedDate;
                    }
                } else {
                    // Reset selection if both start and end dates are already selected
                    selectedStartDate = clickedDate;
                    selectedEndDate = null;
                }

                renderCalendar(currentMonthContainer, 0);
                renderCalendar(nextMonthContainer, 1);
            });
        });
    };

    const currentBtn = document.querySelector(".today");

    currentBtn.addEventListener("click", () => {
        currentDisplayedMonth = 0;
        selectedStartDate = null;
        selectedEndDate = null;
        renderCalendar(currentMonthContainer, 0);
        renderCalendar(nextMonthContainer, 1);
    });

    const nextBtns = document.querySelectorAll(".next");
    const prevBtns = document.querySelectorAll(".prev");

    nextBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            currentDisplayedMonth += 2;
            renderCalendar(currentMonthContainer, 0);
            renderCalendar(nextMonthContainer, 1);
        });
    });

    prevBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            currentDisplayedMonth -= 2;
            renderCalendar(currentMonthContainer, 0);
            renderCalendar(nextMonthContainer, 1);
        });
    });

    renderCalendar(currentMonthContainer, 0);
    renderCalendar(nextMonthContainer, 1);

    document.getElementById("additionalPax").addEventListener("input", function() {
        if (this.value < 0) {
            this.value = 0;
        }
    });
</script>

<?php include 'footer.php' ?>