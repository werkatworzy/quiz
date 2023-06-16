// Zakres punktacji
let score = 0;
let totalQuestions = 5;

// Znajdź formularz quizu w HTML
const quizForm = document.getElementById('quizForm');

// Dodaj nasłuchiwanie na zdarzenie submit formularza
quizForm.addEventListener('submit', function(event) {
  event.preventDefault(); // Zapobiegnij domyślnej akcji przesyłania formularza

  // Zbierz odpowiedzi z formularza
  const answers = {
    question1: quizForm.question1.value,
    question2: quizForm.question2.value,
    question3: quizForm.question3.value,
    question4: quizForm.question4.value,
    question5: quizForm.question5.value
  };

  // Sprawdź odpowiedzi i zwiększ wynik za poprawne odpowiedzi
  if (answers.question1 === 'a') {
    score++;
  }
  if (answers.question2 === 'b') {
    score++;
  }
  if (answers.question3 === 'b') {
    score++;
  }
  if (answers.question4 === 'c') {
    score++;
  }
  if (answers.question5 === 'd') {
    score++;
  }

  // Wyświetl wynik na stronie
  const result = document.createElement('h2');
  result.textContent = `Twój wynik: ${score}/${totalQuestions}`;
  quizForm.appendChild(result);

  // Wyłącz możliwość ponownego przesyłania formularza
  quizForm.querySelector('button[type="submit"]').disabled = true;
});