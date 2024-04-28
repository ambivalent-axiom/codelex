<?php
    echo "\nTic Tac Toe game in progress.\n";
    $moves = 1;
    $player = 'X';
    $winCombos = [
        [
            [0,0],[0,1],[0,2]
        ],
        [
            [1,0],[1,1],[1,2]
        ],
        [
            [2,0],[2,1],[2,2]
        ],
        [
            [0,0],[1,0],[2,0]
        ],
        [
            [0,1],[1,1],[2,1]
        ],
        [
            [0,2],[1,2],[2,2]
        ],
        [
            [0,0],[1,1],[2,2]
        ],
        [
            [2,0],[1,1],[0,2]
        ],


    ];
    $gameOn = true;
    $board = [
        [' ', ' ', ' '],
        [' ', ' ', ' '],
        [' ', ' ', ' ']
    ];

    function restartGame() {
        global $gameOn;
        $playAgain = strtolower(readline("Play again Y/N ?: "));
        if ($playAgain != 'y') {
            $gameOn = false;
            exit;
        }
        global $player;
        global $board;
        global $moves;
        echo "\nTic Tac Toe game in progress.\n";
        $moves = 0;
        $player = 'X';
        $gameOn = true;
        $board = [
            [' ', ' ', ' '],
            [' ', ' ', ' '],
            [' ', ' ', ' ']
        ];
    }
    function display_board(array $board)
    {
        echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
        echo "---+---+---\n";
        echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
        echo "---+---+---\n";
        echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
    }
    function validateInput(string $player): string
    {
        while (true) {
            $choice = (string) readline("'{$player}', choose your location (row, column): ");
            if(strlen($choice) != 3) {
                echo "Input should be no more or less then 3 char length!\n";
                continue;
            } elseif (!is_numeric($choice[0]) || !is_numeric($choice[2])) {
                echo "Input must be two integer digits divided by space!\n";
                continue;
            } elseif ($choice[0] < 0 || $choice[0] > 2 || $choice[2] < 0 || $choice[2] > 2) {
                echo "Input must be within the coordinate range 0-2!\n";
                continue;
            }
            break;
        }
        return $choice;
    }
    function checkIsFreeCell(array $board, string $y, string $x): bool
    {
        if ($board[$y][$x] == ' ') {
            return true;
        }
        return false;
    }
    function updateBoard(string $player, string $coordinates): bool
    {
        global $board;
        $y = $coordinates[0];
        $x = $coordinates[2];
        if (checkIsFreeCell($board, $y, $x)) {
            $board[$y][$x] = $player;
            return true;
        }
        return false;
    }
    function changePlayer(string $player): string
    {
        if ($player == 'X') {
            return 'O';
        }
        return 'X';
    }
    function checkWinner(array $board, array $winCombos): string
    {
        foreach ($winCombos as $winCombo) {
            $snapShot = [];
            foreach ($winCombo as $win) {
                array_push($snapShot, $board[$win[0]][$win[1]]);
            }
            $thereWillBeOnlyOne = array_unique($snapShot);
            if (count($thereWillBeOnlyOne) == 1 && $thereWillBeOnlyOne[0] != ' ') {
                return $thereWillBeOnlyOne[0];
            }
        }
        return "No win";
    }
    function checkTie(array $board): bool
    {
        $tie = true;
        foreach ($board as $row) {
            if (in_array(' ', $row)) {
                $tie = false;
            }
        }
        return $tie;
    }



    while($gameOn) {
        echo "Move: {$moves}\n";
        display_board($board);
        $playerChoice = validateInput($player);
        $move = updateBoard($player, $playerChoice);
        if (!$move) {
            echo "This cell is already taken!\n";
            continue;
        }
        if (checkWinner($board, $winCombos) != "No win") {
            $winner = $player;
        }
        if (checkTie($board)) {
            $tie = checkTie($board);
        }
        echo "=================\n";
        if(isset($winner)) {
            echo "\nWooho! Player {$winner} WON!\n";
            restartGame();
        }
        if(isset($tie)) {
            echo "\nThe game is a tie.\n";
            restartGame();
        }
        $player = changePlayer($player);
        $moves++;
    }

