/*====================== home new coluors ========================*/

.hero {
  display: flex;
  justify-content: space-between;
  padding: 50px;
  background: linear-gradient(to right, #f9fafb, #2a9d8f);
  color: #264653;
  position: relative;
}
.hero-text {
  max-width: 50%;
}
.hero-text h2 {
  color: #264653;
}
.hero-text h2 span {
  font-weight: normal;
  font-size: 18px;
  display: block;
  margin-top: 10px;
  color: #2a9d8f;
}
.hero-text p {
  margin: 20px 0;
  line-height: 1.6;
  color: #264653;
}
button {
  padding: 10px 20px;
  border-radius: 8px;
  font-size: 1.3rem;
  background: #e76f51;
  color: #ffffff;
  border: none;
  cursor: pointer;
}
/* Updated Offer Box Style */
.offer-box {
  background: linear-gradient(to right, #264653, #2a9d8f);
  padding: 40px;
  max-width: 30%;
  border-radius: 70px 0px 70px 0px;
  box-shadow: 5px 5px 15px rgba(38, 70, 83, 0.3);
  position: relative;
  top: 80px;
  transform: translateY(20px);
  z-index: 10;
  opacity: 0;
  animation: slideFadeIn 1.5s ease forwards, pulse 2s infinite ease-in-out;
  animation-delay: 0.3s, 1.8s;
}
@keyframes slideFadeIn {
  0% {
    opacity: 0;
    transform: translateY(50px);
  }
  100% {
    opacity: 1;
    transform: translateY(20px);
  }
}
@keyframes pulse {
  0% {
    transform: translateY(20px) scale(1);
  }
  50% {
    transform: translateY(20px) scale(1.05);
  }
  100% {
    transform: translateY(20px) scale(1);
  }
}
@keyframes colorShift2 {
  0% {
    background-color: #f9fafb;
  }
  50% {
    background-color: #2a9d8f;
  }
  100% {
    background-color: #f9fafb;
  }
}
.offer-box h3 {
  color: #ffffff;
  font-size: 2rem;
}
.offer-box p {
  color: #cccccc;
  font-size: 14px;
}
.sec2 h2 {
  color: #264653;
}
/*====================== section 2 home ========================*/
.main_sec {
  margin-top: 6rem;
  padding: 10px;
  background: linear-gradient(to right, #f9fafb, #2a9d8f);
  color: #264653;
}
.hero2 {
  margin-top: 1rem;
  display: flex;
  justify-content: right;
  padding: 50px;
  color: #264653;
  position: relative;
}
.hero-text2 {
  max-width: 50%;
}
.hero-text2 h2 {
  font-weight: normal;
  font-size: 1.7rem;
  display: block;
  margin-top: 10px;
  color: #e76f51;
}
.hero-text2 p {
  margin: 20px 0;
  line-height: 1.6;
  color: #264653;
}
/* Updated Offer Box Style */
.offer-box2 {
  background-color: #f9fafb;
  padding: 7rem;
  max-width: 40%;
  height: 23rem;
  margin-right: 10rem;
  border-radius: 50%;
  box-shadow: 5px 5px 15px rgba(38, 70, 83, 0.3);
  position: relative;
  top: 80px;
  transform: translateY(20px);
  z-index: 10;
  opacity: 0;
  animation: slideFadeIn 1.5s ease forwards, colorShift2 6s infinite ease-in-out;
  animation-delay: 0.6s, 2.1s;
}
/* black section */
.black {
  padding: 10px;
  background-color: #264653;
  color: #f9fafb;
  text-align: center;
}
.black-sec {
  margin-top: 1rem;
  display: flex;
  justify-content: center;
  padding: 50px;
  color: #f9fafb;
  position: relative;
  gap: 15rem;
}
.black-left {
  width: 30rem;
}
.black-right {
  width: 30rem;
}
/* sky blue section */
.sky-blue {
  padding: 10px;
  background-color: #e76f51;
  color: #f9fafb;
  text-align: center;
}
.sky-blue-sec {
  margin-top: 1rem;
  display: flex;
  justify-content: center;
  padding: 90px;
  color: #264653;
  position: relative;
  gap: 15rem;
}
.sky-blue-sec h1 {
  background-color: #f9fafb;
  border: 1px solid #cccccc;
}
.sky-blue-sec button {
  background-color: #f9fafb;
  border: 1px solid #cccccc;
  color: #264653;
}
.sky-blue-left {
  width: 37rem;
}
.offer-box2 h3 {
  color: #2a9d8f;
  font-size: 1.5rem;
  text-align: center;
  margin-top: 0.8rem;
}
.offer-box2 p {
  text-align: center;
  color: #264653;
  font-size: 14px;
}
.hero2 button {
  padding: 10px 20px;
  border-radius: 8px;
  font-size: 1.3rem;
  background: #e76f51;
  color: #f9fafb;
  border: none;
  cursor: pointer;
}
.sec2 {
  text-align: center;
  color: #264653;
  font-size: 2rem;
}
/*====================== section 3 home ========================*/
.container {
  padding: 40px 20px;
}
h1 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 40px;
  text-align: center;
  color: #264653;
}
h1 span {
  display: block;
  font-size: 28px;
  font-weight: normal;
  color: #2a9d8f;
}
.solutions {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 80px;
}
.solution {
  width: 250px;
  text-align: center;
}
.solution img {
  width: 10rem;
  height: 11rem;
  object-fit: cover;
  border-radius: 8px;
}
.solution h3 {
  margin-top: 10px;
  margin-bottom: 10px;
  color: #2a9d8f;
}
.solution p {
  font-size: 14px;
  line-height: 1.5;
  text-align: justify;
  color: #264653;
}









* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background-color: #e3f2fd;
}

/*====================== HEADER & NAV ========================*/

header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 15px 20px;
  background-color: #0d47a1;
  position: relative;
}

.logo {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo span {
  font-size: 2rem;
  font-weight: bolder;
  color: #ffffff;
}

.logo-img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
}

.navbar {
  display: flex;
  align-items: center;
  gap: 20px;
}

.nav-links {
  display: flex;
  list-style: none;
  gap: 40px;
}

.nav-links a {
  text-decoration: none;
  color: #ffffff;
  font-weight: bold;
  transition: color 0.3s ease;
}

.nav-links a:hover,
.nav-links a.active {
  color: #64b5f6;
}

.dropdown {
  position: relative;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #1976d2;
  box-shadow: 0 2px 8px rgba(0,0,0,0.15);
  list-style: none;
  min-width: 140px;
  padding: 10px;
  top: 100%;
  left: 0;
  z-index: 1000;
  border-radius: 8px;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content li {
  padding: 5px 0;
}

.dropdown-content a {
  color: #ffffff;
  text-decoration: none;
  display: block;
  padding: 5px 10px;
}

.dropdown-content a:hover {
  background-color: #1565c0;
  border-radius: 4px;
}

.social-icons a {
  margin-left: 10px;
  font-size: 1.5rem;
  color: #ffffff;
  transition: transform 0.3s ease, color 0.3s ease;
}

.social-icons ion-icon:hover {
  color: #64b5f6;
  transform: scale(1.2);
}

.menu-icon {
  display: none;
  font-size: 2rem;
  cursor: pointer;
  color: #ffffff;
}

/*====================== HERO SECTION ========================*/

.hero {
  display: flex;
  justify-content: space-between;
  padding: 50px;
  background: linear-gradient(to right, #e3f2fd, #1976d2);
  color: #0d47a1;
  position: relative;
}

.hero-text {
  max-width: 50%;
}

.hero-text h2 {
  color: #0d47a1;
}

.hero-text h2 span {
  font-weight: normal;
  font-size: 18px;
  display: block;
  margin-top: 10px;
  color: #1976d2;
}

.hero-text p {
  margin: 20px 0;
  line-height: 1.6;
  color: #0d47a1;
}

button {
  padding: 10px 20px;
  border-radius: 8px;
  font-size: 1.1rem;
  background: #1976d2;
  color: #ffffff;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #1565c0;
}

/*====================== OFFER BOX ========================*/

.offer-box {
  background: linear-gradient(to right, #0d47a1, #1976d2);
  padding: 40px;
  max-width: 30%;
  border-radius: 70px 0px 70px 0px;
  box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
  position: relative;
  top: 80px;
  transform: translateY(20px);
  z-index: 10;
  opacity: 0;
  animation: slideFadeIn 1.5s ease forwards, pulse 2s infinite ease-in-out;
  animation-delay: 0.3s, 1.8s;
}

@keyframes slideFadeIn {
  0% {
    opacity: 0;
    transform: translateY(50px);
  }
  100% {
    opacity: 1;
    transform: translateY(20px);
  }
}

@keyframes pulse {
  0% {
    transform: translateY(20px) scale(1);
  }
  50% {
    transform: translateY(20px) scale(1.05);
  }
  100% {
    transform: translateY(20px) scale(1);
  }
}

.offer-box h3 {
  color: #ffffff;
  font-size: 2rem;
}

.offer-box p {
  color: #cfe2f3;
  font-size: 14px;
}

/*====================== SECTION 2 ========================*/

.main_sec {
  margin-top: 6rem;
  padding: 10px;
  background: linear-gradient(to right, #e3f2fd, #1976d2);
  color: #0d47a1;
}

.hero2 {
  margin-top: 1rem;
  display: flex;
  justify-content: right;
  padding: 50px;
  color: #0d47a1;
}

.hero-text2 {
  max-width: 50%;
}

.hero-text2 h2 {
  font-weight: normal;
  font-size: 1.7rem;
  color: #1565c0;
}

.hero-text2 p {
  margin: 20px 0;
  line-height: 1.6;
  color: #0d47a1;
}

.offer-box2 {
  background-color: #ffffff;
  padding: 7rem;
  max-width: 40%;
  height: 23rem;
  margin-right: 10rem;
  border-radius: 50%;
  box-shadow: 5px 5px 15px rgba(13, 71, 161, 0.2);
  position: relative;
  top: 80px;
  transform: translateY(20px);
  z-index: 10;
  opacity: 0;
  animation: slideFadeIn 1.5s ease forwards, colorShift2 6s infinite ease-in-out;
  animation-delay: 0.6s, 2.1s;
}

@keyframes colorShift2 {
  0% {
    background-color: #ffffff;
  }
  50% {
    background-color: #bbdefb;
  }
  100% {
    background-color: #ffffff;
  }
}

.offer-box2 h3 {
  color: #1976d2;
  font-size: 1.5rem;
  text-align: center;
}

.offer-box2 p {
  text-align: center;
  color: #0d47a1;
  font-size: 14px;
}

/*====================== BLACK SECTION (Now Dark Blue) ========================*/

.black {
  padding: 10px;
  background-color: #0d47a1;
  color: #ffffff;
  text-align: center;
}

.black-sec {
  margin-top: 1rem;
  display: flex;
  justify-content: center;
  padding: 50px;
  gap: 15rem;
}

/*====================== CTA SECTION ========================*/

.sky-blue {
  padding: 10px;
  background-color: #1976d2;
  color: #ffffff;
  text-align: center;
}

.sky-blue-sec {
  margin-top: 1rem;
  display: flex;
  justify-content: center;
  padding: 90px;
  gap: 15rem;
  color: #0d47a1;
}

.sky-blue-sec h1 {
  background-color: #ffffff;
  border: 1px solid #cccccc;
  padding: 1rem;
  border-radius: 8px;
}

.sky-blue-sec button {
  background-color: #ffffff;
  border: 1px solid #cccccc;
  color: #0d47a1;
}

/*====================== SOLUTIONS SECTION ========================*/

.container {
  padding: 40px 20px;
}

h1 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 40px;
  text-align: center;
  color: #0d47a1;
}

h1 span {
  display: block;
  font-size: 28px;
  font-weight: normal;
  color: #1976d2;
}

.solutions {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 80px;
}

.solution {
  width: 250px;
  text-align: center;
}

.solution img {
  width: 10rem;
  height: 11rem;
  object-fit: cover;
  border-radius: 8px;
}

.solution h3 {
  margin-top: 10px;
  margin-bottom: 10px;
  color: #1976d2;
}

.solution p {
  font-size: 14px;
  line-height: 1.5;
  text-align: justify;
  color: #0d47a1;
}
