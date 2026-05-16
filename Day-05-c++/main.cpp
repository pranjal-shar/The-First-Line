#include <iostream>
#include <vector>
#include <string>

int main() { 
     
    std::vector<std::string> skills = {
        "C++",
        "Python",
        "JavaScript",
        "Java",
        "SQL"
    };
    for (std::string skill : skills) {
        std::cout << skill << std::endl;

    }
    return 0;
}