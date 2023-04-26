#KEY

#------------------------------------------
#Label the section corresponding to the requirement on project page (EXAMPLE: A = create seating chart and load initial reservations)

# FOR Sections that are functioning and completed comment $$$

#FOR Sections that are not working or not completed comment !!!

#Feel free to rearrange things. I just want to make sure we hit all of the funcitonalities.
#----------------------------------------

#!!! B. Display the main menu that asks the user whether they want to reserve a seat or log in as an administrator
#This should be what pulls up. (Front Page of website)
def main():
    print("Welcome to the IT-4320 reservation system! Please select an option using the box below. Alternatively, you may log in as an adminstrator.")

main()



# !!! E. If the user selects the the reservation option they are taken to a page with a form to reserve a seat. Information the user provides
#  (Does it update when we make resrvations?)
def reserveSeat():
    print("Reserve Your Spot!")
    #Limit to A-Z
    fName = input ("First Name: ")
    lName = input ("Last Name: ")

    #Limit these to intergers
    sRow = input ("Row Number: ")
    sColumn = input ("Column Number: ")
