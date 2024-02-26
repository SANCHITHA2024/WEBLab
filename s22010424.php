<?php

function calculateDiscount($totalAmount)
{
    if ($totalAmount >= 0 && $totalAmount < 5000) {
        return 0; // 0% DISCOUNT
    } elseif ($totalAmount >= 5000 && $totalAmount <= 9999) {
        return 5; // 5% DISCOUNT
    } elseif ($totalAmount >= 10000) {
        return 10; // 10% DISCOUNT
    } else {
        return false; 
    }
}

function calculateFinalPrice($totalAmount, $discount)
{
    $finalPrice = $totalAmount - ($totalAmount * ($discount / 100));
    return $finalPrice;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get total amount
    $totalAmount = $_POST['total_amount'];

    // Calculate discount
    $discount = calculateDiscount($totalAmount);

    if ($discount === false) {
        echo "INVALID TOTAL AMOUNT.";
        exit;
    }

    // Calculate final price
    $finalPrice = calculateFinalPrice($totalAmount, $discount);

    // Display the results
    echo "YOUR TOTAL AMOUNT IS: $totalAmount<br>";
    echo "YOUR DISCOUNT IS: $discount%<br>";
    echo "YOUR FINAL PRICE IS: $finalPrice";
}

?>

<style>
    .centered-form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>

<div class="centered-form">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="total_amount">TOTAL AMOUNT:</label>
        <input type="text" name="total_amount" id="total_amount">
        <input type="submit" value="Calculate">
    </form>
</div>
