# Define the number of rows and columns in the seating chart
NUM_ROWS = 10
NUM_COLS = 4

# Initialize the seating chart with all seats available
seating_chart = [['O' for j in range(NUM_COLS)] for i in range(NUM_ROWS)]

# Reserve the seats that are already taken
seating_chart[0][2] = 'X'
seating_chart[0][1] = 'X'
seating_chart[2][2] = 'X'
seating_chart[3][0] = 'X'
seating_chart[4][3] = 'X'
seating_chart[5][1] = 'X'
seating_chart[8][2] = 'X'
seating_chart[9][3] = 'X'

# Print the seating chart
print("    " + " ".join([str(i) for i in range(NUM_COLS)]))
for i in range(NUM_ROWS):
    print(str(i) + "   " + " ".join(seating_chart[i]))

# Ask the user to reserve a seat
name = input("Enter your name: ")
row = int(input("Enter the row number (0-" + str(NUM_ROWS-1) + "): "))
col = int(input("Enter the column number (0-" + str(NUM_COLS-1) + "): "))

# Check if the selected seat is available
if seating_chart[row][col] == 'O':
    seating_chart[row][col] = 'X'
    print("Congratulations, your seat has been reserved!")
else:
    print("Sorry, that seat is already taken.")

# Print the updated seating chart
print("    " + " ".join([str(i) for i in range(NUM_COLS)]))
for i in range(NUM_ROWS):
    print(str(i) + "   " + " ".join(seating_chart[i]))
