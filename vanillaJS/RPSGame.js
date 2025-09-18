import { randomInt } from "node:crypto";
import * as readline from "node:readline";

let rl = readline.createInterface(process.stdin, process.stdout);
let choices = ["rock", "paper", "scissors"];

let userChoice = "";
let computerChoice = "";
let result = "";
rl.question(
  "Choose one of: rock, paper, scissors. What is your choice? \n",
  (answer) => {
    userChoice = answer;
    rl.write(`You chose: ${answer}\n`);
    computerChoice = choices[randomInt(3)];
    rl.write(`The computer chose: ${computerChoice}\n`);
    switch (userChoice) {
      case "rock":
        if (computerChoice === "rock") {
          result = "It's a tie!";
          break;
        }
        if (computerChoice === "paper") {
          result = "You lose!";
          break;
        }
        if (computerChoice === "scissors") {
          result = "You win!";
          break;
        }
        break;
      case "paper":
        if (computerChoice === "rock") {
          result = "You win!";
          break;
        }
        if (computerChoice === "paper") {
          result = "It's a tie!";
          break;
        }
        if (computerChoice === "scissors") {
          result = "You lose!";
          break;
        }
        break;
      case "scissors":
        if (computerChoice === "rock") {
          result = "You lose!";
          break;
        }
        if (computerChoice === "paper") {
          result = "You win!";
          break;
        }
        if (computerChoice === "scissors") {
          result = "It's a tie!";
          break;
        }
        break;
    }
    rl.write(result + "\n");
    rl.close();
  }
);
