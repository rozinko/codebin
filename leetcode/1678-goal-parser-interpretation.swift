/**
 * 1678. Goal Parser Interpretation
 * https://leetcode.com/problems/goal-parser-interpretation/
 */

 class Solution {
     func interpret(_ command: String) -> String {
         return command.replacingOccurrences(of: "()", with: "o").replacingOccurrences(of: "(al)", with: "al")
     }
 }