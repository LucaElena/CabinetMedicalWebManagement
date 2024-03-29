<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/PaginaScheduleV2.css">
    <script src="https://kit.fontawesome.com/9ab9988c3d.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/jpg" href="/images/favicon.jpg" />
    <title>Book Appointment</title>
</head>
<body>
    <header>
        <ul>
            <?=$data['generalbar']?>    
        </ul>
    </header>

    <main>




    <div class="schedul">
        <!-- <div class="schedul__header">
            <h3>Book Appointment</h3>
        </div> -->
        <div class="schedul__details">

            <!-- <label class="schedul__details__label1" >Department</label> -->
            <select class=" schedul__details__section">
                <?=$data['departament_option_value']?>
                <?=$data['departments']?>
            </select>



            <!-- <label class="schedul__details__label2" >Doctor</label> -->
            <select class=" schedul__details__doctors">
                <?=$data['doctor_option_value']?>
                <?=$data['doctors']?>
            </select>


        </div>




        <div class="schedul__data">

            <form action="#" class="schedul__data__form">
                <label>Add a new patient Full Name</label>
                <input type="text" placeholder="Full Name" >

                <label>Add a new patient Email</label>
                <input type="email" placeholder="Email" >

                <label>Add a new patient Phone </label>
                <input type="text" placeholder="Phone number" >

                <label>Or select a old patient</label>
                <select class=" schedul__data__form">
                    <option value="Default"> Cabinet old patient </option>
                    <option value="user-id"> Patient Andrei Popescu </option>
                    <option value="user-id"> Patient Andrei Popescu</option>
                    <option value="user-id"> Patient Andrei Popescu </option>
                    <option value="user-id"> Patient Andrei Popescu </option>
                    <option value="user-id"> Patient Andrei Popescu </option>
                </select>

                <!-- <label>Reason For Visit</label> -->
                <select class=" schedul__data__form">
                    <option value="Default"> Reason For Visit </option>
                    <option value="Consultations"> Consultations </option>
                    <option value="Ultrasound"> Ultrasound</option>
                    <option value="results"> Results </option>
                    <option value="results"> EKG </option>
                    <option value="results"> Results </option>
                </select>

                
            </form>

        </div>
        <div class="schedule__calendar">
            <!-- 
            <div class="schedule__calendar__month" id="selected_month">JANUARY 2022</div>
            -->
            <?=$data['schedule_calendar_bar_month']?>
            <!-- <button type="button" class="schedule__calendar__left_month_btn" id="month_leftBtn">&#9668;</button>
            <button type="button" class="schedule__calendar__left_week_btn" id="week_leftBtn">&#9668;</button> -->
            <button type="button" class="schedule__calendar__left_month_btn" id="month_leftBtn">&#9668;</button>
            <button type="button" class="schedule__calendar__left_week_btn" id="week_leftBtn">&#9668;</button>
            <div class="schedule__calendar__inside">


                <!-- pusa in cod deja pt generare dinamica :) 
                <div class="schedule__calendar__inside__head">
                    <div class="schedule__calendar__inside__day" id="day_0_schedule">MON 05/04</div>
                </div>
                <div class="schedule__calendar__inside__head">
                    <div class="schedule__calendar__inside__day" id="day_1_schedule">TUE 06/04</div>
                </div>
                <div class="schedule__calendar__inside__head">
                    <div class="schedule__calendar__inside__day" id="day_2_schedule">WED 07/04</div>
                </div>
                <div class="schedule__calendar__inside__head">
                    <div class="schedule__calendar__inside__day" id="day_3_schedule">THU 08/04</div>
                </div>
                <div class="schedule__calendar__inside__head">
                    <div class="schedule__calendar__inside__day" id="day_4_schedule">FRI 09/04</div>
                </div>
                <div class="schedule__calendar__inside__head">
                    <div class="schedule__calendar__inside__day" id="day_5_schedule">SAT 10/04</div>
                </div>
                <div class="schedule__calendar__inside__head">
                    <div class="schedule__calendar__inside__day" id="day_6_schedule">SUN 11/04</div>
                </div>
                -->
               
                <?=$data['schedule_calendar_bar_week']?>
                <!-- 
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__bussy" value="08:00"
                        id="calendar_row1_col1"> 8:00 <span class="hover-value">Popescu Ion 0747678790</span></button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__closed" value="08:00"
                        id="calendar_row2_col1"> 8:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="08:00"
                        id="calendar_row3_col1"> 08:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="08:00"
                        id="calendar_row4_col1"> 08:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="08:00"
                        id="calendar_row5_col1"> 08:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="08:00"
                        id="calendar_row6_col1"> 08:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="08:00"
                        id="calendar_row7_col1"> 08:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="09:00"
                        id="calendar_row1_col2"> 09:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="09:00"
                        id="calendar_row2_col2"> 09:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="09:00"
                        id="calendar_row3_col2"> 09:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="09:00"
                        id="calendar_row4_col2"> 09:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="09:00"
                        id="calendar_row5_col2"> 09:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="09:00"
                        id="calendar_row6_col2"> 09:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="09:00"
                        id="calendar_row7_col2"> 09:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="10:00"
                        id="calendar_row1_col3"> 10:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="10:00"
                        id="calendar_row2_col3"> 10:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="10:00"
                        id="calendar_row3_col3"> 10:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="10:00"
                        id="calendar_row4_col3"> 10:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="10:00"
                        id="calendar_row5_col3"> 10:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="10:00"
                        id="calendar_row6_col3"> 10:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="10:00"
                        id="calendar_row7_col3"> 10:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="11:00"
                        id="calendar_row1_col4"> 11:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="11:00"
                        id="calendar_row2_col4"> 11:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="11:00"
                        id="calendar_row3_col4"> 11:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="11:00"
                        id="calendar_row4_col4"> 11:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="11:00"
                        id="calendar_row5_col4"> 11:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="11:00"
                        id="calendar_row6_col4"> 11:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="11:00"
                        id="calendar_row7_col4"> 11:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="12:00"
                        id="calendar_row1_col5"> 12:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="12:00"
                        id="calendar_row2_col5"> 12:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="12:00"
                        id="calendar_row3_col5"> 12:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="12:00"
                        id="calendar_row4_col5"> 12:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="12:00"
                        id="calendar_row5_col5"> 12:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="12:00"
                        id="calendar_row6_col5"> 12:00</button>
                </div>
                <div class="schedule__calendar__inside__hours_btn">
                    <button type="button" class="schedule__calendar__inside__hours_btn__open" value="12:00"
                        id="calendar_row7_col5"> 12:00</button>
                </div>

                -->
                <?=$data['schedule_calendar_inside']?>

                <button type="button" class="schedule__calendar__inside__down_btn"
                    id="hours_downBtn">&#9660;</button>
                <button type="button" class="schedule__calendar__inside__up_btn" id="hours_upBtn">&#9650;</button>
                
            </div>
            <!-- <button type="button" class="schedule__calendar__right_week_btn" id="week_rightBtn">&#9658;</button>
            <button type="button" class="schedule__calendar__right_month_btn" id="month_rightBtn">&#9658;</button> -->
            <button type="button" class="schedule__calendar__right_week_btn" id="week_rightBtn">&#9658;</button>
            <button type="button" class="schedule__calendar__right_month_btn" id="month_rightBtn">&#9658;</button>
        </div>




        <div class="schedul__btn ">
            <button type="submit" class="schedul__btn__btn1">Book</button>
            <button type="submit" class="schedul__btn__btn2">Cancel</button>
            <!-- <button type="submit" class="schedul__btn__btn3">Move</button> -->
        </div>


        <script src="/js/calendar.js"></script>
    </div>
    </main>
   
</body>
</html>